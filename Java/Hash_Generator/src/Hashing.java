
import java.math.BigInteger;
import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;
import java.util.Arrays;
import javax.swing.JOptionPane;

/**
 * This class is on charge of generate de encription for any of user input.
 * @author Orlando X Perez Varela
 */
public class Hashing {
    
   //Declaring class atributes as Strings and private.
   private String hashedFirstname,
                  hashedMidname,
                  hashedLastname,
                  hashedMessage;
   
   /*Function that hash the data.
   * 1. First the needed variables are declared with their correspondent types.
   * 2. In second place we set the desired by method "getInstance"algorithm and set the variable
   * value to user input.
   * 3. In third place we save the encription, save it in a variable and return it.
   */
   private String Begin_Hash(String dataToHash) throws NoSuchAlgorithmException{
       String strHashedData;
       BigInteger intHashedVal;
       var dataBytes = dataToHash.getBytes();
       var mssgedgst = MessageDigest.getInstance("SHA-256");
       mssgedgst.update(dataBytes);
       intHashedVal = new BigInteger(1, mssgedgst.digest());
       strHashedData = intHashedVal.toString();
       
       return strHashedData;
   }
   
   /*Constructor that recieve the Firstname, Middlename and Lastname to encript.*/
   Hashing(String firstName, String midName, String lastName){
       //String hashRecieved;
        try{
            if(firstName.equals("") || midName.equals("") || lastName.equals("")){
                if(firstName.equals("")){
                    hashedMidname = Begin_Hash(midName);
                    hashedLastname = Begin_Hash(lastName);
                }
           
                else if (midName.equals("")){
                    hashedFirstname = Begin_Hash(firstName);
                    hashedLastname = Begin_Hash(lastName);
                }
           
                else{
                    hashedFirstname = Begin_Hash(firstName);
                    hashedMidname = Begin_Hash(midName);
                }
            }
            
            else{
                hashedFirstname = Begin_Hash(firstName);
                hashedMidname = Begin_Hash(midName);
                hashedLastname = Begin_Hash(lastName);
            }
        }
        
        catch(Exception e){
           JOptionPane.showMessageDialog(null, "An error has ocurred: " + e); 
        }
   }
   /*Constructor that only recieve the message to encript.*/
   Hashing(String messageToHash){
       try{
           hashedMessage = Begin_Hash(messageToHash);
       }
       
       catch(Exception e){
           JOptionPane.showMessageDialog(null, "An error has ocurred: " + e);
       }
   }
   
   //Getters to acces to class atributes.
   
   public String getFirstname(){
       return hashedFirstname;
   }
   
   public String getMidname(){
       return hashedMidname;
   }
   
   public String getLastname(){
       return hashedLastname;
   }
   
   public String getMessage(){
       return hashedMessage;
   }
}