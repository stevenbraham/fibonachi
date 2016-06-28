using System;

namespace Brahambiz.Math
{
    public class Program
    {
        public static void Main(string[] args)
        {
            if (args.Length > 0)
            {
                Console.WriteLine(new Fibonacci().calculate(long.Parse(args[0])));
            }
            else
            {
                Console.WriteLine("Please provide a number");
            }
        }
    }
}
