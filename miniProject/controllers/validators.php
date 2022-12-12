<?php
    function namecheck($name){
        echo $name."<br>";
        $valname1=0;
        for($i=0;$i<strlen($name);$i++){
            if(($name[$i]>='a' && $name[$i]<='z')||($name[$i]>='A' && $name[$i]<='Z')|| $name[$i]<=" "){
                continue;
            }
            else{
                $valname1=1;
                break;
            }
        }
        return $valname1;
    }
    //check username in the database first
    function usernamecheck($username){
        $valusername1=0;
        $valusername2=0;
        
        $it1=substr_count($username,'.');
        $it2=substr_count($username,'_');
        $it3=substr_count($username,'-');
        
        if($it1>='1' || $it2>='1' || $it3>='1'){
            $valusername1=1;
        }
        for($i=0;$i<strlen($username);$i++){
            if((($username[$i]>='a' && $username[$i]<='z')||($username[$i]>='A' && $username[$i]<='Z')|| ctype_digit($username[$i]) || ($username[$i]<='.' ||$username[$i]<='-'||$username[$i]<='_')) && $valusername1==1){
                continue;
            }
            else{
                $valusername2=1;
                break;
            }
        }
        return $valusername2;
    }

    function passwardcheck($password){
        $valpassword=0;
        $it5=substr_count($password,'@');
        $it6=substr_count($password,'#');
        $it7=substr_count($password,'$');
        $it8=substr_count($password,'%');
        if(($it5>='1' || $it6>='1' || $it7>='1' || $it8>='1')&&strlen($password)>7){
            $valpassword=1;
        }
        return $valpassword;
    }

    function echeck($email){
        echo "\n\nchecking: ".$email."\n";
        $valem=0;
        $z=0;
        $len=strlen($email);
        for($i=0;$i<$len;$i++){
            if(($email[$i]>='a' && $email[$i]<='z')|| ctype_digit($email[$i])){
                $z+=1;
                continue;
            }
            else if($email[$i]=='.'){
                echo "\n. found at ".$email[$i]."->".$i."-<".$len;
                if($z>1 && $i!==($len-1) && $i!=0){
                    $z=0;
                    continue;
                }
                else{
                    $valem=1;
                    break;
                }
                $z=0;
            }
            else{
                $valem=1;
                break;
            }
        }
        return $valem;
    }
    function emailcheck($email){
        $valemail=0;
        $it9=substr_count($email,'@');
        $it10=substr_count($email,'.');
        
        if($it9==1 && $it10>0){
            $range=strpos($email,'@');
            $email1=substr($email,0,$range);
            $email2=substr($email,$range+1,strlen($email));
            echo $email1."  ->  ".$email2."\n";
            $val1=echeck($email1);
            $val2=echeck($email2);
            echo "\n\n"."ans: ".$val1."\n";
            echo ""."ans: ".$val2."\n";
            if($val1==1 || $val2==1){
                $valemail=1;
            }
        }
        else{
            $valemail=1;
        }
        
        return $valemail;
    }

    function dobcheck($date,$limit){
        $year=substr($date,0,strpos($date,'-'));
        $currentyear=date('Y');
        echo $year." -> ".date('y')." -> ".date('Y');
        $age=(int)$currentyear-(int)$year;
        if($age>=$limit){
            echo "Perfect";
        }
        else{
            echo "Wrong";
        }
    }
?>