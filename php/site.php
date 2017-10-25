<?php

class Site{
    public function createSite($head, $nav, $content, $footer, $useOuterWrapper = false, $outerWrapperClassName = ""): string{
        error_reporting(0);
        $bodySt = "<body>";
        $bodyE = "</body>";

        $set = "";
        $set .= $head->createHead();
        $set .= $bodySt;
        if ($useOuterWrapper) $set .= "<div class='$outerWrapperClassName'>";
        $set .= $nav->navR;
        $set .= $content->content;
        if ($useOuterWrapper) $set .= "</div>";
        $set .= $footer->createFooter();
        $set .= $bodyE;

        $website = "<html>$set</html>";
        return $website;
    }
}
?>
