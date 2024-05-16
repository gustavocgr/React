
<?php



class Person
{
    public string $NameName;
    public \DateTimeInterface $bithdate;
    public ?string $documento= NULL;


    public function __construct(string $name, \DateTimeInterface $escDTA, ?string $documento)
    {
        $this->NameName=$name;


    }
};
