<?php
class Dance
{
    protected string $name;
    protected string $gender;

    public function __construct(string $name, string $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
interface GenderInterface  {
    const MALE = 'Male';
    const FEMALE = 'Female';
}

class SquareDance extends Dance implements GenderInterface
{
    protected SplQueue $queueMale;
    protected SplQueue $queueFemale;


    public function __construct()
    {
        $this->queueMale = new SplQueue();
        $this->queueFemale = new SplQueue();
    }

    public function addDance(Dance $dance): void
    {
        if ($dance->getGender() === GenderInterface::MALE) {
            $this->queueMale->enqueue($dance);
        } else {
            $this->queueFemale->enqueue($dance);
        }
    }

    public function pairDance(): string
    {
        while (!$this->queueFemale->isEmpty() || !$this->queueMale->isEmpty()) {
            if ($this->queueMale->isEmpty()) {
                return count($this->queueFemale) . ' nam đang chờ ' . '<br>';
            }

            if ($this->queueFemale->isEmpty()) {
                return count($this->queueMale) . ' nữ đang chờ ' . '<br>';
            }

            echo 'Cặp: ' . $this->queueMale->dequeue()->getName() . '-' . $this->queueFemale->dequeue()->getName() . '<br>';
        }
    }
}
$dance1 = new Dance("Hung", GenderInterface::MALE);
$dance2 = new Dance("Nam", GenderInterface::MALE);
$dance3 = new Dance("Hoang", GenderInterface::MALE);
$dance4 = new Dance("Linh", GenderInterface::FEMALE);
$dance5 = new Dance("My", GenderInterface::FEMALE);

$squareDance = new SquareDance();
$squareDance->addDance($dance1);
$squareDance->addDance($dance2);
$squareDance->addDance($dance3);
$squareDance->addDance($dance4);
$squareDance->addDance($dance5);

echo $squareDance->pairDance();