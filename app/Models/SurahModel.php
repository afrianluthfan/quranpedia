<?php

namespace App\Models;

use CodeIgniter\Model;

class SurahModel extends Model
{
    protected $table = 'quran_arabic';

    public function getWordsByRootId($rootId)
    {
        $arabicWordJson = file_get_contents('arabicword.json');
        $arabicWordData = json_decode($arabicWordJson, true);

        $matchedWords = [];
        foreach ($arabicWordData['ArabicWord'] as $arabicWord) {
            if ($arabicWord['root_id'] == $rootId) {
                $matchedWords[] = $arabicWord['word'];
            }
        }

        return $matchedWords;
    }

public function getQuranVersesByWords($words)
{
    $matchedVerses = [];
    foreach ($words as $word) {
        $matchedVerses[] = $this->select('sura, aya, text')->where('text LIKE', "%$word%")->findAll();
    }

    return $matchedVerses;
}
}
