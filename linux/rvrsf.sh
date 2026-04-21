if [ $# -eq 0 ]
then
echo " syntax is <$0><file>"
exit 1
fi

cp $1 file
l=`cat file | wc -l`
rm  -f rfile
while [ $l -ge 1 ]
do
tail -n 1 file >> rfile 
l=`expr $l - 1`
head -n $l file > temp
mv temp file
done 

echo "the reversed file is "
cat rfile
