/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package PopUps;

import java.awt.Frame;
import javax.swing.ImageIcon;

/**
 *
 * @author elsol
 */
public class NotificationManager extends Notification {

    public NotificationManager(Frame parent, boolean modal) {
        super(parent, modal);
    }
    
    public void logInError()
    {
        String iconPath = "src\\Images\\Box Important.png";
        ImageIcon icon = new ImageIcon(iconPath);
        setLabels(icon, "Unable to Login.", "The username or password is incorrect. Please Try again.");
    }
}
