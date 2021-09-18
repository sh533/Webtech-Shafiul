
using namespace std;
char FileName[] = "example.txt";
//Ghanendra Yadav
int main ()
{
string line;
ifstream inMyStream (FileName);
int c;

if (inMyStream.is_open())
{

     while(  getline (inMyStream, line))
  {

             cout<<line<<endl;
             c += line.length();

     }
     cout<<"\n\n"<<"Total Character In File "<<c<<endl<<endl;
    }
    inMyStream.close();

system("pause");
   return 0;
}
  fin.get(ch);

  if(ch==' ' || ch=='\n' )
   word++;
 }

 cout<<"\nNumber of total words: "<<word<<"\n";

 fin.close();
