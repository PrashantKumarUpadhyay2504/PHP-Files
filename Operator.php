<!--
A. Arithmetic Operater 

1. +
2. - 
3. *
4. /
5. %
6. **

Note : only it can implement on numeric values .
 
B. Assignment Operator

eg: $var=45;
$var2=$var;


# Short Hand Operator

1. +=
2. -=
3. /=
4. %=
5. *=
6. **=

C. Increment and Decreament 

 1. Prefix = eg.- $val= --$var and  $val= ++$var;
 2. Postfix= eg-  $val= $var-- and  $val= $var++;


C. Comparision Operator

1. Equality(==):
eg.
   $var=9;
   $val=9;
   var_dump($var==$val); //true
   $val="9";
   var_dump($var==$val); //true
   $val=9.4;
   var_dump($var==$val); //false

2. Identity(===): it check the value and datatype .

eg.
   $var=9;
   $val=9;
   var_dump($var===$val); //true
   $val="9";
   var_dump($var===$val); //false
   $val=9.4;
   var_dump($var===$val); //false


3. a. Not Equality(!=) or (<>):
   b. Not Identical (!==):
eg.
   $var=9;
   $val=9;
   var_dump($var != $val); //false
   $val="9";
   var_dump($var <> $val); //false
   $val=9.4;
   var_dump($var !==$val); //true

4. SpaceShip Camparision(<=>) : it displays the result in int format .

   $var=9;
   $val=9;
   var_dump($var <=> $val); //int(0)
   $val=34;
   var_dump($var <=> $val); //int(-1)
   $val=9.4;
   var_dump($var <=> $val); //int(1)

D. Logical Operator:
1. And (&&):
2. OR (||):
3. NOT (!): 

 -->