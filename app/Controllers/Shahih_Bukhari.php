<?php

namespace App\Controllers;

use App\Models\ShahihBukhariModel;

class Shahih_Bukhari extends BaseController
{
    private $suffixes = [
        'ات',
        'ان',
        'ة',
        'ين',
        'ات',
        'ت',
        'ن',
        'ه',
        'ها',
        'وا',
        'يا',
        'ية',
        'يات',
        'أ',
    ];

    private $prefixes = [
        'ال',
        'و',
        'ف',
        'ب',
        'ك',
        'ل',
    ];

    public static function removeDiacritics($text)
    {
        $remove = array('ِ', 'ُ', 'ٓ', 'ٰ', 'ْ', 'ٌ', 'ٍ', 'ً', 'ّ', 'َ');
        $normalizedText = str_replace($remove, '', $text);
        return $normalizedText;
    }



    public static function isMarifah($word)
    {
        // Arabic definite article prefix is "ال"
        $definitePrefix = 'ال';

        // Check if the word starts with the definite article prefix
        return mb_substr($word, 0, mb_strlen($definitePrefix)) === $definitePrefix;
    }

    public function arabicStem($word)
    {
        // Remove diacritics
        $word = Shahih_Bukhari::removeDiacritics($word);

        // Remove leading and trailing spaces
        $word = trim($word);

        if ($word === 'الله') {
            $word = 'اله';
        } else {
            // Remove known suffixes
            $suffixFound = true;
            while ($suffixFound) {
                $suffixFound = false;
                foreach ($this->suffixes as $suffix) {
                    if (mb_substr($word, -mb_strlen($suffix)) === $suffix) {
                        $word = mb_substr($word, 0, -mb_strlen($suffix));
                        $suffixFound = true;
                        break;
                    }
                }
            }

            // Remove known prefixes
            $prefixFound = true;

            while ($prefixFound) {
                $prefixFound = false;
                foreach ($this->prefixes as $prefix) {
                    if (mb_substr($word, 0, mb_strlen($prefix)) === $prefix) {
                        $word = mb_substr($word, mb_strlen($prefix));
                        $prefixFound = true;
                        break;
                    }
                }
            }
        }
        return $word;
    }

    public function view($words = false)
    {
        // Load the ShahihBukhariModel using dependency injection
        $model = new ShahihBukhariModel();

        // Get the current page from the query string, default to 1 if not set
        $currentPage = $this->request->getVar('page') ?? 1;

        // Get the selected word from the query string
        $selectedWord = $this->request->getGet('highlight');

        // Stem the selected word
        $stemmedSelectedWord = $this->arabicStem($selectedWord);

        // Fetch records with pagination using the model's paginateFiltered() method
        $shahih = $model->paginateFiltered($selectedWord, 10, 'group1'); // 10 records per page, 'group1' is the pagination group

        // Get the pagination links
        $pager = $model->pager;

        $data = [
            'shahih' => $shahih,
            'pager' => $pager,
            'words' => $words ? $words : '',
            'stemmedSelectedWord' => $stemmedSelectedWord,
            // Pass the stemmed selected word to the view
            'controller' => $this, // Pass the controller itself to the view
        ];
        // Load the view file directly without creating a new folder
        return view('page/shahih_bukhari_view', $data);
    }
}