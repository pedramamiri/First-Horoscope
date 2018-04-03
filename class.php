<?php
class person {
    private $mounth;
    public function __construct($newMounth){
        $this->mounth = $newMounth;
    }
    public function horoscope(){
        if(101<= $this->mounth && $this->mounth <=119){
            return "Stenbocken – Capricornus";

        }elseif(120<= $this->mounth && $this->mounth <=218){
            return "Vattumannen – Aquarius";

        }elseif(219<=$this->mounth && $this->mounth <=320){
            return "Fiskarna – Pisces";

        }elseif(321<=$this->mounth && $this->mounth <=419){
            return "Väduren – Aries";

        }elseif(420<=$this->mounth && $this->mounth <=521){
            return "Oxen – Taurus";

        }elseif(522<=$this->mounth && $this->mounth <=621){
            return "Tvillingarna – Gemini";

        }elseif(622<=$this->mounth && $this->mounth <=722){
            return "Kräftan – Cancer";

        }elseif(723<=$this->mounth && $this->mounth <=822){
            return "Lejonet – Leo";

        }elseif(823<=$this->mounth && $this->mounth <=922){
            return "Jungfrun – Virgo";

        }elseif(923<=$this->mounth && $this->mounth <=1022){
            return "Vågen – Libra";

        }elseif(1023<=$this->mounth && $this->mounth <=1121){
            return "Skorpionen – Scorpio";

        }elseif(1122<=$this->mounth && $this->mounth <=1221){
            return "Skytten – Sagittarius";

        }else{
            return "Stenbocken – Capricornus";

        }

    }
    

}
?>