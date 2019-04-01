<?php
trait updatingStatusTrait {
    public function setStatus ($status) {
        $status = strtolower($status);
        if ($status == "on shelf" OR $status =="on loan" OR $status == "no longer available") {
            $this->status = $status;
        } else { 
            die(" Fatal error: Invalid Status");
        }
        return $status;
    }
}