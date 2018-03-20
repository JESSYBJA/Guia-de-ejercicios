using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ejercicio1
{
    class Program
    {
        static void Main(string[] args)
        {
            double v = 0;
            double t = 0;
            double calculo;
            Console.WriteLine("ingrese un numero para calcular la velocidad");
            t = Convert.ToInt32(Console.ReadLine());
            v =  100 /t ;
            calculo = v;

            
            Console.WriteLine("La velocidad es igual a:" + calculo);
            Console.ReadKey();
        }
    }
}
