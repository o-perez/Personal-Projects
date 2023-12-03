package materialsPriceCalculator;
import PopUps.*;
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/GUIForms/JFrame.java to edit this template
 */

/**
 *
 * @author elsol
 */
public class LogIn extends javax.swing.JFrame {

    /**
     * Creates new form LogIn
     */
    public LogIn() {
        initComponents();
    }

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        logBackPanel = new javax.swing.JPanel();
        usernameLBL = new javax.swing.JLabel();
        usernameTXTF = new javax.swing.JTextField();
        passwordLBL = new javax.swing.JLabel();
        passwordTXTF = new javax.swing.JPasswordField();
        loginBTN = new javax.swing.JButton();
        logImgLBL = new javax.swing.JLabel();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setSize(new java.awt.Dimension(600, 600));
        addComponentListener(new java.awt.event.ComponentAdapter() {
            public void componentResized(java.awt.event.ComponentEvent evt) {
                formComponentResized(evt);
            }
        });

        logBackPanel.setBackground(new java.awt.Color(0, 255, 255));

        usernameLBL.setBackground(new java.awt.Color(255, 255, 255));
        usernameLBL.setFont(new java.awt.Font("Perpetua Titling MT", 1, 18)); // NOI18N
        usernameLBL.setText("Username:");
        usernameLBL.setName("usernameLBL"); // NOI18N
        usernameLBL.setOpaque(true);

        passwordLBL.setBackground(new java.awt.Color(255, 255, 255));
        passwordLBL.setFont(new java.awt.Font("Perpetua Titling MT", 1, 18)); // NOI18N
        passwordLBL.setText("Password:");
        passwordLBL.setName("passwordLBL"); // NOI18N
        passwordLBL.setOpaque(true);

        passwordTXTF.setName("logpasswordTXTF"); // NOI18N

        loginBTN.setFont(new java.awt.Font("Perpetua Titling MT", 1, 14)); // NOI18N
        loginBTN.setText("Log In");
        loginBTN.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                loginBTNActionPerformed(evt);
            }
        });
        loginBTN.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                loginBTNKeyPressed(evt);
            }
            public void keyTyped(java.awt.event.KeyEvent evt) {
                EnterPressed(evt);
            }
        });

        logImgLBL.setIcon(new javax.swing.ImageIcon(getClass().getResource("/Images/currentUser.png"))); // NOI18N

        javax.swing.GroupLayout logBackPanelLayout = new javax.swing.GroupLayout(logBackPanel);
        logBackPanel.setLayout(logBackPanelLayout);
        logBackPanelLayout.setHorizontalGroup(
            logBackPanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(logBackPanelLayout.createSequentialGroup()
                .addContainerGap(220, Short.MAX_VALUE)
                .addGroup(logBackPanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, logBackPanelLayout.createSequentialGroup()
                        .addGroup(logBackPanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addGroup(logBackPanelLayout.createSequentialGroup()
                                .addGroup(logBackPanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                                    .addComponent(passwordLBL)
                                    .addComponent(usernameLBL))
                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                                .addGroup(logBackPanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                                    .addComponent(usernameTXTF)
                                    .addComponent(passwordTXTF, javax.swing.GroupLayout.PREFERRED_SIZE, 207, javax.swing.GroupLayout.PREFERRED_SIZE)))
                            .addGroup(logBackPanelLayout.createSequentialGroup()
                                .addGap(95, 95, 95)
                                .addComponent(loginBTN)))
                        .addGap(132, 132, 132))
                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, logBackPanelLayout.createSequentialGroup()
                        .addComponent(logImgLBL, javax.swing.GroupLayout.PREFERRED_SIZE, 240, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addGap(191, 191, 191))))
        );
        logBackPanelLayout.setVerticalGroup(
            logBackPanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(logBackPanelLayout.createSequentialGroup()
                .addGap(23, 23, 23)
                .addComponent(logImgLBL, javax.swing.GroupLayout.PREFERRED_SIZE, 160, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 66, Short.MAX_VALUE)
                .addGroup(logBackPanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(usernameLBL)
                    .addComponent(usernameTXTF, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(24, 24, 24)
                .addGroup(logBackPanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(passwordLBL)
                    .addComponent(passwordTXTF, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(18, 18, 18)
                .addComponent(loginBTN)
                .addContainerGap())
        );

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(logBackPanel, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(logBackPanel, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void formComponentResized(java.awt.event.ComponentEvent evt) {//GEN-FIRST:event_formComponentResized
        // TODO add your handling code here:
    }//GEN-LAST:event_formComponentResized

    private void loginBTNActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_loginBTNActionPerformed
        String getUserName,
               getPassword;
        char charArrPass [];
        
        getUserName = usernameTXTF.getText();
        charArrPass = passwordTXTF.getPassword();
        getPassword = new String(charArrPass);
            
        if(getUserName.equals("Admin") && getPassword.equals("Admin"))
        {
            mainMenu openMain = new mainMenu();
            this.setVisible(false);
            openMain.setVisible(true);
        }
        
        else if(getUserName != "Admin" || getPassword != "Admin")
        {
            NotificationManager box = new NotificationManager(new javax.swing.JFrame(), true);
            box.logInError();
            box.setVisible(true);
        }
        else
        {
            NotificationManager box = new NotificationManager(new javax.swing.JFrame(), true);
            box.logInError();
            box.setVisible(true);
       }
    }//GEN-LAST:event_loginBTNActionPerformed

    private void loginBTNKeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_loginBTNKeyPressed
        // TODO add your handling code here:
    }//GEN-LAST:event_loginBTNKeyPressed

    private void EnterPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_EnterPressed
        mainMenu openMain = new mainMenu();
        this.setVisible(false);
        openMain.setVisible(true);
    }//GEN-LAST:event_EnterPressed

    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        /* Set the Nimbus look and feel */
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
         */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(LogIn.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(LogIn.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(LogIn.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(LogIn.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new LogIn().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JPanel logBackPanel;
    private javax.swing.JLabel logImgLBL;
    private javax.swing.JButton loginBTN;
    private javax.swing.JLabel passwordLBL;
    private javax.swing.JPasswordField passwordTXTF;
    private javax.swing.JLabel usernameLBL;
    private javax.swing.JTextField usernameTXTF;
    // End of variables declaration//GEN-END:variables
}
