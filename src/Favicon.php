<?php

class Favicon 
{
    private $id;
    private $url;
    public $image;
    private $lastUpdate;
    private $nextUpdate;
    
    private $today;
    
    // The periode defines how often a favicon should get an update from the Google Service.
    private $periode = "+30 days";
    
    public function Favicon($url) 
    {
        $this->url = $url;
        $this->today = date("Y-m-d");
        
        // Checks if favicon is already in the DB.
        if ($this->urlExists()) {
            $this->init();
            
            if (strtotime($this->today) >= strtotime($this->nextUpdate)) {
                // Periode is over. Favicon should get updated.
                $this->updateFavicon();
            }
        }
        else {
            $this->insertFavicon();
        }
        
        $this->init();
    }
    
    private function init() 
    {
        $urlExists = $this->urlExists();
        
        $this->id = $urlExists["ID"];
        $this->image = $urlExists["image"];
        $this->lastUpdate = $urlExists["lastUpdate"];
        $this->nextUpdate = $urlExists["nextUpdate"];       
    }
    
    private function getDataURI($image, $mime = "") 
    {
        return "data: image/png;base64,".base64_encode(file_get_contents($image));
    }
    
    private function urlExists() 
    {
        // I use my own static MySqlDB methods to connect to the DB.
        // Of course you should use your own 
        $result = MySqlDB::querySelect("SELECT * FROM `favicons` WHERE `url` = '$this->url'");
        
        if (count($result) > 0) {
            return $result[0];
        }
        else {
            return false;
        }
    }
    
    private function insertFavicon() 
    {
        $lastUpdate = $this->today;
        $nextUpdate = date("Y-m-d", strtotime($this->periode));
        $image = $this->getDataURI("http://www.google.com/s2/favicons?domain=" . $this->url);
        
        $sql = "INSERT INTO `favicons` (`url`, `image`, `lastUpdate`, `nextUpdate`)"
                . "VALUES ('$this->url', '$image', '$lastUpdate', '$nextUpdate')";
        
        return MySqlDB::queryInsert($sql);
    }
    
    private function updateFavicon() 
    {
        $lastUpdate = $this->today;
        $nextUpdate = date("Y-m-d", strtotime($this->periode));
        $image = $this->getDataURI("http://www.google.com/s2/favicons?domain=" . $this->url);
        
        $sql = "UPDATE `favicons` SET `image` = '$image', `lastUpdate` = '$lastUpdate', `nextUpdate` = '$nextUpdate'"
                . "WHERE `ID` = '$this->id'";
        
        return MySqlDB::queryUpdate($sql);    
    }
}