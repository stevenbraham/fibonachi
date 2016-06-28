namespace Brahambiz.Math
{
    //A class with functions to work with fibonacci numbers, (C) 2016 Steven Braham
    public class Fibonacci
    {
        //Internal cache for previously calculated numbers
        private long[] memory = new long[93];

        public Fibonacci()
        {
            //set default values
            memory[0] = 0;
            memory[1] = 1;
        }
        //Calculates the fibonacci number from a positive integer, warning this only works with numbers < 1000
        public long calculate(long number)
        {
            if (number >= 0 && number <= 92)
            {
                switch (number)
                {
                    case 0:
                        return 0;
                    case 1:
                        return 1;
                    default:
                        return memory[number] != 0 ? memory[number] : memory[number] = calculate(number - 1) + calculate(number - 2);
                }
            }
            //something went wrong if we reaced this line
            return -1;
        }
    }
}