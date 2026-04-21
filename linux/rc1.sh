
if [ $#  -ne 3 ]
then
 echo "Syntax is $0 <no1> <no2> <no3>"
 exit 1
fi
n1=$1
n2=$2
n3=$3

if [ $n1 -gt $n2 ]
then 
   temp=$n1
   n1=$n2
   n2=$temp
fi

if [ $n2 -gt $n3 ]
then
  temp=$n2
  n2=$n3
  n3=$temp
fi
if [ $n1 -gt $n2 ]
then
  temp=$n1
  n1=$n2
  n2=$temp
fi 

if [ `expr $n1 + $n2` -gt $n3  ]
then 
  echo " Triangle can be formed "
else
  echo "Triangle cannot be formed"
  exit 1 
fi

 if [ $n1 -eq $n2  -a  $n2 -eq $n3 ]
  then 
     echo " Equilateral Triangle"

  elif [ $n1 -eq $n2  -o  $n2 -eq $n3  -o  $n1 -eq $n3 ] 
  then
      echo "Isoceless"
      
  elif [ $((n1*n1 + n2*n2)) -eq $((n3*n3)) ]
   then
     echo "Right Angled Triangle"
   
  elif [ $n1 -ne $n2  -a  $n2 -ne $n3  -a  $n1 -ne $n3 ]
then
 echo "Normal Triangle"
fi
exit 0 
