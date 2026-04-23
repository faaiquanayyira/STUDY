if [ $# -eq 0 ]
then
echo "syntax is <$0><src1><des1><src2><des2>"
exit 1
fi
if [ $(( $# % 2 )) -ne 0 ]
then
echo "give files in pairs"
exit 1
fi
while [ $# -gt 0 ]
do
if [ -f $1 ]
then
cp $1 $2
echo "copies $1 to $2"
else
echo "file $1 doesnot exist"
fi
shift
shift
done
