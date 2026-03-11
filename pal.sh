if [ $# -ne 1 ]
then
 echo: " Syntax is <$0> <number> "
 exit 1
fi
no=$1
rev=0
while [ $no -ne 0 ]
do
 digit=`expr $no % 10`
 rev=`expr $rev \* 10 + $digit`
 no=`expr $no / 10`
done
if [ $1 -eq $rev  ]
then
 echo " Palindrome "
else
 echo "Not a palindrome "
fi
