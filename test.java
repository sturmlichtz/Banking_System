
// JAVA program to find sum of all divisors 
// of a natural number 
import java.math.*;
import java.util.ArrayList;
import java.util.Scanner; 
  
public class test { 
      
    // Function to calculate sum of all proper 
    // divisors num --> given natural number 
    static int divSum(int num) 
    { 
        // Final result of summation of divisors 
        int result = 0; 
       
        // find all divisors which divides 'num' 
        for (int i = 2; i <= Math.sqrt(num); i++) 
        { 
            // if 'i' is divisor of 'num' 
            if (num % i == 0) 
            { 
                // if both divisors are same then  
                // add it only once else add both 
                if (i == (num / i)) 
                    result += i; 
                else
                    result += (i + num / i); 
            } 
        } 
       
        // Add 1 to the result as 1 is also 
        // a divisor 
        return (result + 1); 
    } 
       
    // Driver program to run the case 
    public static void main(String[] args) 
    {

        Scanner sc = new Scanner(System.in);
        int limit = sc.nextInt();
        ArrayList<Integer> li = new ArrayList<Integer>();
        System.out.println("op");
        for(int i=0; i<limit; i++){
            li.add(sc.nextInt());
            int num = li.get(i); 
            System.out.println(divSum(num)); 
        }



    } 
}