<?php

namespace App\Controllers;

use App\Models\ShahihBukhariModel;

class Shahih_Bukhari extends BaseController
{
    public static function highlightText($text, $term)
    {
        if ($text === $term) {
            $highlightedText = '<span class="font-bold text-red-500">' . $term . '</span>';
        } else {
            $highlightedText = $text;
        }
        return $highlightedText;
    }


    public static function highlightTextWithRemove($text, $term)
    {
        $highlightedText = Shahih_Bukhari::highlightText(Shahih_Bukhari::removeDiacritics($text), Shahih_Bukhari::removeDiacritics($term));
        return $highlightedText;
    }

    public static function removeDiacritics($text)
    {
        $remove = array('ِ', 'ُ', 'ٓ', 'ٰ', 'ْ', 'ٌ', 'ٍ', 'ً', 'ّ', 'َ');
        $normalizedText = str_replace($remove, '', $text);
        return $normalizedText;
    }

    public function view($words = false)
    {
        // Load the ShahihBukhariModel using dependency injection
        $model = new ShahihBukhariModel();

        // Get the current page from the query string, default to 1 if not set
        $currentPage = $this->request->getVar('page') ?? 1;

        // Get the selected word from the query string
        $selectedWord = $this->request->getGet('highlight');

        // Fetch records with pagination using the model's paginateFiltered() method
        $shahih = $model->paginateFiltered($selectedWord, 10, 'group1'); // 10 records per page, 'group1' is the pagination group

        // Get the pagination links
        $pager = $model->pager;

        $data = [
            'shahih' => $shahih,
            'pager' => $pager,
            'words' => $words ? $words : '',
        ];
        // Load the view file directly without creating a new folder
        return view('page/shahih_bukhari_view', $data);
    }
}