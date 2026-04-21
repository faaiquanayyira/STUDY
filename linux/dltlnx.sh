if [ $# -eq 0 ]
then
echo "Syntax is <$0><filename>"
exit 1
fi

if [ ! -f $1 ]
then
echo " file doesn't exist"
exit 2
fi

echo "original file is" 
cat $1

grep -v -i "linux" $1 > temp.txt
mv temp.txt $1

echo "----updated file is----"
cat $1
