<?php

namespace VkSdk\Ads\Includes;

class AdsCampaignSpecification
{
    private $client_id = 0;
    private $name;
    private $day_limit;
    private $all_limit;
    private $start_time;
    private $stop_time;
    private $status;

    public function getArray()
    {
        $array = array(
            "client_id" => $this->client_id,
            "name" => $this->name
        );

        if ($this->day_limit) {
            $json["day_limit"] = $this->day_limit;
        }
        if ($this->all_limit) {
            $json["all_limit"] = $this->all_limit;
        }
        if ($this->start_time) {
            $json["start_time"] = $this->start_time;
        }
        if ($this->stop_time) {
            $json["stop_time"] = $this->stop_time;
        }
        if ($this->status) {
            $json["status"] = $this->status;
        }

        return $array;
    }

    public function setClientId($client_id)
    {
        $this->client_id = $client_id;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setDayLimit($day_limit)
    {
        $this->day_limit = $day_limit;
        return $this;
    }

    public function setAllLimit($all_limit)
    {
        $this->all_limit = $all_limit;
        return $this;
    }

    public function setStartTime($start_time)
    {
        $this->start_time = $start_time;
        return $this;
    }

    public function setStopTime($stop_time)
    {
        $this->stop_time = $stop_time;
        return $this;
    }

    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
}
