<?php

   if($_GET['kayttajatunnus'] == 'jukka') {
    print("MENI SISAAN");
    $kahva = sqlite_yhdista();
    $kahva->exec('CREATE TABLE foo (bar STRING)');

   }


   function sqlite_yhdista()
   {
       $kahva = new SQLite3("./lentoenkat.sqlite");
       return $kahva;
   }

   function sqlite_query($dbhandle,$query)
   {
       $array['dbhandle'] = $dbhandle;
       $array['query'] = $query;
       $result = $dbhandle->query($query);
       return $result;
   }
   function sqlite_fetch_array(&$result,$type)
   {
       #Get Columns
       $i = 0;
       while ($result->columnName($i))
       {
           $columns[ ] = $result->columnName($i);
           $i++;
       }
      
       $resx = $result->fetchArray(SQLITE3_ASSOC);
       return $resx;
   }


?>