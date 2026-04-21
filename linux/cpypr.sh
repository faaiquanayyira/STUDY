r='expr $# % 2`
if [ $r -ne 0 ]
then
echo "file names are not in pair"
exit 1
fi

if [ ! -f $1 -a ! -f $2 ]
then
echo " $1 and $2 are not existing or not an file"
