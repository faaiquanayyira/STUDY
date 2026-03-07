if [ $# -ne 1 ]
then
 echo "Syntax is <$0> <number>"
 exit 1
fi
rev=0
while [ $no -ne 0 ]
do
 digit=`expr $no % 10`
 rev=`expr $rev "*" 10 + $digit`
  no=`expr $no / 10`
done 
while [ $rev -ne 0 ]
do
 digit=`expr $rev % 10`
 case $digit in
   0) echo "zerow";;
   1) echo "one";;
   2) echo "two";;
   3) echo "three";;
   4) echo "four";;
   5) echo "five";;
   6) echo "six";;
   7) echo "seven";;
   8) echo "eight";;
   9) echo "nine";;
esac
rev=`expr $no / 10`
done
