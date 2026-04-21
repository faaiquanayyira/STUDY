for f in *
do
fdatetime=`date -r $f "+%d-%m-%Y  %H:%M:%S"`
if [ -d $f ]
then
echo " $f\t\t<DIR>\t$fdatetime"
else
fsize=`cat $f |wc -c`
echo " $f\t\t$fsize\t$fdatetime"
fi
done
