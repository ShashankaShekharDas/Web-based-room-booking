<?php

    $link=new mysqli("localhost","shashanka","maarkandeya","Data_prj");

    
    
    // 0 for not booked 1 for booked


for($i=1;$i<=8;$i++)
    {
        for($j=1;$j<=30;$j++)
        {
            $temp=$i*100+$j;
            
            for($k=8;$k<20;$k++)
            {
            $query="INSERT INTO monday(Block,Room,Available,time) VALUES ('AB1','".$temp."',
            '0','"
                .$k.
            "')";
            $link->query($query);
            }
            
        }
    }

for($i=1;$i<=6;$i++)
    {
        for($j=1;$j<=30;$j++)
        {
            $temp=$i*100+$j;
            
            for($k=8;$k<20;$k++)
            {
            $query="INSERT INTO monday(Block,Room,Available,time) VALUES ('AB2','".$temp."',
            '0','"
                .$k.
            "')";
            $link->query($query);
            }
            
        }
    }

for($i=1;$i<=6;$i++)
    {
        for($j=1;$j<=30;$j++)
        {
            $temp=$i*100+$j;
            
            for($k=8;$k<20;$k++)
            {
            $query="INSERT INTO monday(Block,Room,Available,time) VALUES ('ADB','".$temp."',
            '0','"
                .$k.
            "')";
            $link->query($query);
            }
            
        }
    }
    


for($i=1;$i<=8;$i++)
    {
        for($j=1;$j<=30;$j++)
        {
            $temp=$i*100+$j;
            
            for($k=8;$k<20;$k++)
            {
            $query="INSERT INTO tuesday(Block,Room,Available,time) VALUES ('AB1','".$temp."',
            '0','"
                .$k.
            "')";
            $link->query($query);
            }
            
        }
    }

for($i=1;$i<=6;$i++)
    {
        for($j=1;$j<=30;$j++)
        {
            $temp=$i*100+$j;
            
            for($k=8;$k<20;$k++)
            {
            $query="INSERT INTO tuesday(Block,Room,Available,time) VALUES ('AB2','".$temp."',
            '0','"
                .$k.
            "')";
            $link->query($query);
            }
            
        }
    }

for($i=1;$i<=6;$i++)
    {
        for($j=1;$j<=30;$j++)
        {
            $temp=$i*100+$j;
            
            for($k=8;$k<20;$k++)
            {
            $query="INSERT INTO tuesday(Block,Room,Available,time) VALUES ('ADB','".$temp."',
            '0','"
                .$k.
            "')";
            $link->query($query);
            }
            
        }
    }


for($i=1;$i<=8;$i++)
    {
        for($j=1;$j<=30;$j++)
        {
            $temp=$i*100+$j;
            
            for($k=8;$k<20;$k++)
            {
            $query="INSERT INTO wednesday(Block,Room,Available,time) VALUES ('AB1','".$temp."',
            '0','"
                .$k.
            "')";
            $link->query($query);
            }
            
        }
    }

for($i=1;$i<=6;$i++)
    {
        for($j=1;$j<=30;$j++)
        {
            $temp=$i*100+$j;
            
            for($k=8;$k<20;$k++)
            {
            $query="INSERT INTO wednesday(Block,Room,Available,time) VALUES ('AB2','".$temp."',
            '0','"
                .$k.
            "')";
            $link->query($query);
            }
            
        }
    }

for($i=1;$i<=6;$i++)
    {
        for($j=1;$j<=30;$j++)
        {
            $temp=$i*100+$j;
            
            for($k=8;$k<20;$k++)
            {
            $query="INSERT INTO wednesday(Block,Room,Available,time) VALUES ('ADB','".$temp."',
            '0','"
                .$k.
            "')";
            $link->query($query);
            }
            
        }
    }


for($i=1;$i<=8;$i++)
    {
        for($j=1;$j<=30;$j++)
        {
            $temp=$i*100+$j;
            
            for($k=8;$k<20;$k++)
            {
            $query="INSERT INTO thursday(Block,Room,Available,time) VALUES ('AB1','".$temp."',
            '0','"
                .$k.
            "')";
            $link->query($query);
            }
            
        }
    }

for($i=1;$i<=6;$i++)
    {
        for($j=1;$j<=30;$j++)
        {
            $temp=$i*100+$j;
            
            for($k=8;$k<20;$k++)
            {
            $query="INSERT INTO thursday(Block,Room,Available,time) VALUES ('AB2','".$temp."',
            '0','"
                .$k.
            "')";
            $link->query($query);
            }
            
        }
    }

for($i=1;$i<=6;$i++)
    {
        for($j=1;$j<=30;$j++)
        {
            $temp=$i*100+$j;
            
            for($k=8;$k<20;$k++)
            {
            $query="INSERT INTO thursday(Block,Room,Available,time) VALUES ('ADB','".$temp."',
            '0','"
                .$k.
            "')";
            $link->query($query);
            }
            
        }
    }




for($i=1;$i<=8;$i++)
    {
        for($j=1;$j<=30;$j++)
        {
            $temp=$i*100+$j;
            
            for($k=8;$k<20;$k++)
            {
            $query="INSERT INTO friday(Block,Room,Available,time) VALUES ('AB1','".$temp."',
            '0','"
                .$k.
            "')";
            $link->query($query);
            }
            
        }
    }

for($i=1;$i<=6;$i++)
    {
        for($j=1;$j<=30;$j++)
        {
            $temp=$i*100+$j;
            
            for($k=8;$k<20;$k++)
            {
            $query="INSERT INTO friday(Block,Room,Available,time) VALUES ('AB2','".$temp."',
            '0','"
                .$k.
            "')";
            $link->query($query);
            }
            
        }
    }

for($i=1;$i<=6;$i++)
    {
        for($j=1;$j<=30;$j++)
        {
            $temp=$i*100+$j;
            
            for($k=8;$k<20;$k++)
            {
            $query="INSERT INTO friday(Block,Room,Available,time) VALUES ('ADB','".$temp."',
            '0','"
                .$k.
            "')";
            $link->query($query);
            }
            
        }
    }



for($i=1;$i<=8;$i++)
    {
        for($j=1;$j<=30;$j++)
        {
            $temp=$i*100+$j;
            
            for($k=8;$k<20;$k++)
            {
            $query="INSERT INTO saturday(Block,Room,Available,time) VALUES ('AB1','".$temp."',
            '0','"
                .$k.
            "')";
            $link->query($query);
            }
            
        }
    }

for($i=1;$i<=6;$i++)
    {
        for($j=1;$j<=30;$j++)
        {
            $temp=$i*100+$j;
            
            for($k=8;$k<20;$k++)
            {
            $query="INSERT INTO saturday(Block,Room,Available,time) VALUES ('AB2','".$temp."',
            '0','"
                .$k.
            "')";
            $link->query($query);
            }
            
        }
    }

for($i=1;$i<=6;$i++)
    {
        for($j=1;$j<=30;$j++)
        {
            $temp=$i*100+$j;
            
            for($k=8;$k<20;$k++)
            {
            $query="INSERT INTO saturday(Block,Room,Available,time) VALUES ('ADB','".$temp."',
            '0','"
                .$k.
            "')";
            $link->query($query);
            }
            
        }
    }



for($i=1;$i<=8;$i++)
    {
        for($j=1;$j<=30;$j++)
        {
            $temp=$i*100+$j;
            
            for($k=8;$k<20;$k++)
            {
            $query="INSERT INTO sunday(Block,Room,Available,time) VALUES ('AB1','".$temp."',
            '0','"
                .$k.
            "')";
            $link->query($query);
            }
            
        }
    }

for($i=1;$i<=6;$i++)
    {
        for($j=1;$j<=30;$j++)
        {
            $temp=$i*100+$j;
            
            for($k=8;$k<20;$k++)
            {
            $query="INSERT INTO sunday(Block,Room,Available,time) VALUES ('AB2','".$temp."',
            '0','"
                .$k.
            "')";
            $link->query($query);
            }
            
        }
    }

for($i=1;$i<=6;$i++)
    {
        for($j=1;$j<=30;$j++)
        {
            $temp=$i*100+$j;
            
            for($k=8;$k<20;$k++)
            {
            $query="INSERT INTO sunday(Block,Room,Available,time) VALUES ('ADB','".$temp."',
            '0','"
                .$k.
            "')";
            $link->query($query);
            }
            
        }
    }
?>