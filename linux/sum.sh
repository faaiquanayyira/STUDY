if [ $# -lt 2  ]
then
echo "syntax is <$0><no1><no2>..."
else
sum=0
while [ $# -gt 0 ]
do
sum=`expr $sum + $1`
shift
done
echo "sum is $sum "
exit 0
fi
