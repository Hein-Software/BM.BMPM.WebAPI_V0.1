<?php

class BMPM_WebAPI_V0_1 implements iBMPM_API_V0_1 {
    private string $apiUrl = 'https://bmpm.biomanager.hein-software.de/v0.1/';
    
    // Src: https://thisinterestsme.com/send-get-request-with-php/
    private function sendGetRequest(string $url) {
        // Use file_get_contents to GET the URL in question
        $contents = file_get_contents($url);
        // Return. If $contents == FALSE, something went wrong
        return $contents
    }
    
    public function getPackageId(string $name, string $author) {
        $url = $this->apiUrl . 'getPackageId.php?name=' . urlencode($name) . '&author=' . urlencode($author);
        $contents = $this->sendGetRequest($url);
        if ($contents !== false) {
            return $contents;
        } else {
            return '';
        }
    }
}

?>