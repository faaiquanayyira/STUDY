if [ $# -ne 0 ]
then
echo "Syntax is <$0>"
exit 1
fi
t=`date +%H`
if [ $t -ge 0 -a $t -lt 12 ]
then
echo "Good Morning"
elif [ $t -ge 12 -a $t -lt 16 ]
then
echo " Good Afternoon"
elif [ $t -ge 16 -a $t -lt 20 ]
then
echo "Good Evening"
else
echo " Good night"
fi
