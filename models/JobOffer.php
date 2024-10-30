<?php

require_once(realpath(dirname(__FILE__)) . "/Tag.php");
require_once(realpath(dirname(__FILE__)) . "/Company.php");

class JobOffer {
    private int $id;
    private string $jobTitle;
    private Company $company;

    public function __construct(string $jobTitle, string $companyName, string $companyImg)
    {
        $this->jobTitle = $jobTitle;
        $this->company = new Company($companyName, $companyImg);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getJobTitle(): string
    {
        return $this->jobTitle;
    }

    public function getCompany(): Company
    {
        return $this->company;
    }
}
