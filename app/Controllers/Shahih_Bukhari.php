<?php

namespace App\Controllers;

use App\Models\ShahihBukhariModel;

class Shahih_Bukhari extends BaseController
{
    public static function highlightText($text, $term) {
        $highlightedText = str_replace($term, '<strong class="text-red-500">' . $term . '</strong>', $text);
        return $highlightedText;
    }
    
    public static function highlightTextWithRemove($text, $term) {
        $highlightedText = str_replace($term, '<strong style="color: red;">' . $term . '</strong>', Shahih_Bukhari::removeDiacritics($text));
        return $highlightedText;
    }
    
    public static function removeDiacritics($text) {
        $remove = array('ِ', 'ُ', 'ٓ', 'ٰ', 'ْ', 'ٌ', 'ٍ', 'ً', 'ّ', 'َ');
        $normalizedText = str_replace($remove, '', $text);
        return $normalizedText;
    }
    
    // public static function light_stemming($term) {
    //     if($term == "اللَّهُ"){
    //         $prefixes = Shahih_Bukhari::removeDiacritics(array("واُ", "باُ", "للُُللُ", "ومُ", "وتُ", "وبُ", "لاُ", "سيُ", "وسُ", "ويُ", "ولُ", "كاُُكاُ", "فا", "والُ", "بالُ", "فالُ", "كالُ", "وللُ", "مالُ", "االُُاالُ", "سالُ", "لاُلُ"));
    //     } else {
    //         $prefixes = Shahih_Bukhari::removeDiacritics(array("الُ", "واُ", "باُ", "للُُللُ", "ومُ", "وتُ", "وبُ", "لاُ", "سيُ", "وسُ", "ويُ", "ولُ", "كاُُكاُ", "فا", "والُ", "بالُ", "فالُ", "كالُ", "وللُ", "مالُ", "االُُاالُ", "سالُ", "لاُلُ"));
    //     }
    //     $suffixes = Shahih_Bukhari::removeDiacritics(array("ونُ", "اتُ", "انُُانُ", "ينُ", "تنُ", "تمُ", "كنُ", "كمُ", "هنُ", "ياُ", "نيُ", "واُ", "ماُ", "ناُ", "همُ", "يةُ", "ها"));
    //     $singleSuffixes = Shahih_Bukhari::removeDiacritics(array("تُ", "يُ", "هُ", "ة"));
    //     $singlePrefixes = Shahih_Bukhari::removeDiacritics(array("ب", "ل", "ي"));
    //     $length = mb_strlen($term, 'UTF-8');
        
    //     // If the term is 4 characters or more
    //     if($length >= 4) {
    //         // Removing prefixes
    //         foreach ($prefixes as $prefix) {
    //         if(mb_substr($term, 0, mb_strlen($prefix, 'UTF-8'), 'UTF-8') == $prefix) {
    //             $term = mb_substr($term, mb_strlen($prefix, 'UTF-8'), $length, 'UTF-8');
    //         }
    //         }
        
    //         // Removing suffixes
    //         foreach ($suffixes as $suffix) {
    //         if(mb_substr($term, -$length, mb_strlen($suffix, 'UTF-8'), 'UTF-8') == $suffix) {
    //             $term = mb_substr($term, 0, -$length, 'UTF-8');
    //         }
    //         }
        
    //         // Remove 'و' from the start
    //         if(mb_substr($term, 0, 1, 'UTF-8') == 'و') {
    //         $term = mb_substr($term, 1, $length, 'UTF-8');
    //         }
        
    //         // Remove 'ب', 'ل', or 'ي' from the start
    //         foreach ($singlePrefixes as $prefix) {
    //         if(mb_substr($term, 0, 1, 'UTF-8') == $prefix) {
    //             $term = mb_substr($term, 1, $length, 'UTF-8');
    //         }
    //         }
    //     }
        
    //     // If the term is 3 characters or more
    //     if($length >= 3) {
    //         foreach ($singleSuffixes as $suffix) {
    //         if(mb_substr($term, -$length, mb_strlen($suffix, 'UTF-8'), 'UTF-8') == $suffix) {
    //             $term = mb_substr($term, 0, -$length, 'UTF-8');
    //         }
    //         }
    //     }
        
    //     return $term;
    //}

    public function view($words=false)
    {
        // Load the ShahihBukhariModel using dependency injection
        $model = new ShahihBukhariModel();
        
        // Get the current page from the query string, default to 1 if not set
        $currentPage = $this->request->getVar('page') ?? 1;

        // Fetch records with pagination using the model's paginate() method
        $shahih = $model->paginate(10, 'group1'); // 10 records per page, 'group1' is the pagination group

        // Get the pagination links
        $pager = $model->pager;

        $data = [
            'shahih' => $shahih,
            'pager'  => $pager,
            'words' => $words ? $words : '',
        ];
        // Load the view file directly without creating a new folder
            return view('page/shahih_bukhari_view', $data);
    
    }
}
