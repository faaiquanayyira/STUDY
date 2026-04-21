if [ $# -gt 1 ]
then
echo "syntax is <$0>[<file name>]"
exit 1
fi
flag=0
if [ $# -eq 1 ]
then
term="tty"
exec < $1
flag=1
fi
while read line
do
nol=`expr $nol + 1`
set $line >/dev/null
nowds=`expr $nowds + $#`
done
echo "number of lines = $nol"
echo "number of words = $nowds"
if [ $flag -eq 1 ]
then
exec < $term
fi
exit 0
