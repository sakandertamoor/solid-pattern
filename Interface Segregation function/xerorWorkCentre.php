<?php

 class xerorWorkCentre implements iPrint,iScan,iFax
{
    public function prints(){
        echo "PPrint papers";
    }
    public function fax()
    {
        echo "Do Fax";
    }
    public function getPrintSpoolDetails()
    {
        echo "Do print spoool Details";
    }
    public function scan()
    {
        echo "Do Scan";
    }
    public function scanPhoto()
    {
        // TODO: Implement scanPhoto() method.
    }
 }