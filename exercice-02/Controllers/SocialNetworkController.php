<?php

    class SocialNetworkController
    {
        function getListSocialNetwork() {
            $listSocialNetwork = array(
                new SocialNetwork("Facebook", "https://facebook.com"),
                new SocialNetwork("Instagram", "https://instagram.com"),
                new SocialNetwork("Linkedin", "https://www.linkedin.com"),
                new SocialNetwork("GitHub", "https://github.com/honoagency")
            );

            return $listSocialNetwork;
        }
    }
    

?>