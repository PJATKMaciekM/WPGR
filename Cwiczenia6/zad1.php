<?php
class NoweAuto {
    protected $model, $price, $exchangerate;
    public function setExchangerate($exchangerate) {
        $this->exchangerate = $exchangerate;
    }
    public function setModel($model) {
        $this->model = $model;
    }
    public function setPrice($price) {
        $this->price = $price;
    }
    public function getExchangerate() {
        return $this->exchangerate;
    }
    public function getModel() {
        return $this->model;
    }
    public function getPrice() {
        return $this->price;
    }
    public function ObliczCene() {
        return $this->price * $this->exchangerate;
    }
}

class AutoZDodatkami extends NoweAuto {
    protected $alarm, $radio, $ac;

    public function getAlarm()
    {
        return $this->alarm;
    }

    public function setAlarm($alarm)
    {
        $this->alarm = $alarm;
    }

    public function getRadio()
    {
        return $this->radio;
    }
    public function setRadio($radio)
    {
        $this->radio = $radio;
    }

    public function getAc()
    {
        return $this->ac;
    }
    public function setAc($ac)
    {
        $this->ac = $ac;
    }

    public function ObliczCene() {
        return parent::ObliczCene() + $this->ac*100 + $this->radio*80 + $this->alarm*90;
    }
}

class Ubezpieczenie extends AutoZDodatkami {
    protected $percentage, $years;
    public function getPercentage()
    {
        return $this->percentage;
    }

    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;
    }
    public function getYears()
    {
        return $this->years;
    }
    public function setYears($years)
    {
        $this->years = $years;
    }
    public function ObliczCene() {
        return $this->percentage * (parent::ObliczCene()*((100-$this->years)/100));
    }
}
?>