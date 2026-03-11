if [ $# -ne 1 ]
then
  echo "Sysntax is <$0> <Number>"
  exit 1
fi
n=$1
f1=0
f2=1
echo $f1
echo $f2
i=2
while [ $i -lt $n ]
do
 f=`expr $f1 + $f2`
echo $f
f1=$f2
f2=$f
i=`expr $i + 1`
done 
