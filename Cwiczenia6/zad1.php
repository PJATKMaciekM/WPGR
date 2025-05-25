<?php
class NoweAuto {
    protected $model, $price, $exchangerate;
    public function setExchangerate($exchangerate)
    {
        $this->exchangerate = $exchangerate;
    }
    public function setModel($model): void
    {
        $this->model = $model;
    }
    public function setPrice($price): void
    {
        $this->price = $price;
    }
    public function getExchangerate(): float
    {
        return $this->exchangerate;
    }
    public function getModel(): string
    {
        return $this->model;
    }
    public function getPrice(): int
    {
        return $this->price;
    }
    public function ObliczCene(): float
    {
        return $this->price * $this->exchangerate;
    }
}

class AutoZDodatkami extends NoweAuto {
    protected $alarm, $radio, $ac;

    public function getAlarm(): int
    {
        return $this->alarm;
    }

    public function setAlarm($alarm): void
    {
        $this->alarm = $alarm;
    }

    public function getRadio(): int
    {
        return $this->radio;
    }
    public function setRadio($radio): void
    {
        $this->radio = $radio;
    }

    public function getAc(): int
    {
        return $this->ac;
    }
    public function setAc($ac): void
    {
        $this->ac = $ac;
    }

    public function ObliczCene(): float
    {
        return parent::ObliczCene() + $this->ac*100 + $this->radio*80 + $this->alarm*90;
    }
}

class Ubezpieczenie extends AutoZDodatkami {
    protected $percentage, $years;
    public function getPercentage(): float
    {
        return $this->percentage;
    }

    public function setPercentage($percentage): void
    {
        $this->percentage = $percentage;
    }
    public function getYears(): int
    {
        return $this->years;
    }
    public function setYears($years): void
    {
        $this->years = $years;
    }
    public function ObliczCene(): float
    {
        return $this->percentage * (parent::ObliczCene()*((100-$this->years)/100));
    }
}
?>