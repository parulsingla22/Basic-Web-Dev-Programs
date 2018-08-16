function check(a)
{
if(a%2==0)
return a+"is even";
else
return a +"is odd";
}
function greatest(a,b,c)
{
if(a>b)
{
if(a>c)
return a+"is greater";
else
return c+"is greater";
}
else
return b+"is greater";
}
function greater(a,b,c)
{
if(a>b && a>c)
{

return a+"is greater";
}
else if(b>a && b>c)
{

return b+"is greater";
}

return c+"is greater";
}
function alpha(ch)
{
switch (ch)
{case 'a':
 return ch+"is vowel";
 break;
 
case 'e':
 return ch+"is vowel";
 break;
 
case 'i':
 return ch+"is vowel";
 break;
case 'o':
 return ch+"is vowel";
 break;
case 'u':
 return ch+"is vowel";
 break;
 default:
 return ch+"is a consonant";
 }
}