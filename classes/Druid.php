<?php
class Druid extends Character{
    private $attack = 10;
    private $forestStrength = 0;
    
    
    public function attack(Character $target){
        $rand = rand(1,10);
        if ($rand ==1){
            $result = $result = $this->heal();
        } else if ($rand <=3){
            $result = $this->invokeForestStrength($target);
        }else if ($rand>3){
            $result = $this->stickHit($target);
        }
        return $result;
    }
    public function heal() {
        $lifePoints = $this->lifePoints;
        if ($this->lifePoints > 100){
            $this->lifePoints += lifePoints;
        }
        $status = "$this->name grtgr!";
        return $status;
    }
    
    public function invokeForestStrength($target){
        $this->forestStrength = true;
        $target->setLifePoints($this->attack * 3);
        
        $this->forestStrength=false;
        
        $status = "$this->name grtgr!";
        return $status;
    }
    public function stickHit ($target) {
        $target->setLifePoints ($this->attack);
        $status = "$this->name attaque {$target->name}! Il reste {$target->getLifePoints()} à {$target->name} !";
        return $status;
    }
}