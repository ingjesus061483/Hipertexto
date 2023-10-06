<?php
       class Operaciones
       {
            public function llenar()            
            {                
                $persons=[];                
                for($i=0;$i<=4;$i++)                
                {       
                    $tarea= file_get_contents("https://randomuser.me/api/");
                    $result=json_decode($tarea);
                    $person=$result->results[0];
                    $persons[$i]=$person;                          
                }                
                return $persons;            
            }
            public function Calcular($persons)
            {                
                for($i =0;$i<=count($persons)-1;$i++)                
                {
                    $name=$persons[$i]->name;
                    $completename= strtolower($name->first.' '.$name->last);            
                    $arr=count_chars($completename,1);
                    $mayor=0;
                    $letra= "";
                    foreach($arr as$key => $value)
                    {
                        if($value>$mayor)    
                        {
                            $mayor=$value;
                            $letra=chr( $key);               
                        }                    
                    }   
                    echo "<div>";                 
                    echo"<strong> El nombre completo es:</strong> ". $completename."<br>";                
                    echo "<strong>la letra mas utilizada es:</strong> ".$letra." con ".$mayor." numero de repeticiones <br>";                
                    echo"</div>";
                }
            }
        }
