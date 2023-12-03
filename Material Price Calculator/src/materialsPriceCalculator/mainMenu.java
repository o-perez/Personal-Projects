/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/GUIForms/JFrame.java to edit this template
 */
package materialsPriceCalculator;

/**
 *
 * @author elsol
 */
public class mainMenu extends javax.swing.JFrame {

    /**
     * Creates new form mainMenu
     */
    public mainMenu() {
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

        welcomeLBL = new javax.swing.JLabel();
        separatorLine = new javax.swing.JSeparator();
        programHomePane = new javax.swing.JTabbedPane();
        homePane = new javax.swing.JPanel();
        homeDivivder = new javax.swing.JSplitPane();
        openRecentsPNL = new javax.swing.JPanel();
        jScrollPane1 = new javax.swing.JScrollPane();
        recentHomeList = new java.awt.List();
        bttnsHome = new javax.swing.JPanel();
        viewAllReportBTTNS = new javax.swing.JButton();
        printLstBTTN = new javax.swing.JButton();
        homeSearchBTTN = new javax.swing.JButton();
        Exit = new javax.swing.JButton();
        calculatePane = new javax.swing.JPanel();
        productNameLBL = new javax.swing.JLabel();
        productNaemList = new javax.swing.JComboBox<>();
        priceTagLBL = new javax.swing.JLabel();
        priceTXTF = new javax.swing.JTextField();
        unitsLBL = new javax.swing.JLabel();
        unitTXTF = new javax.swing.JTextField();
        EditPriceBTTN = new javax.swing.JToggleButton();
        nextProductBTTN = new javax.swing.JButton();
        prevProductBTTN = new javax.swing.JButton();
        calculateBTTN = new javax.swing.JButton();
        tax1LBL = new javax.swing.JLabel();
        tax2LBL = new javax.swing.JLabel();
        tax1TXTF = new javax.swing.JTextField();
        tax2TXTF = new javax.swing.JTextField();
        caltePriceLBL = new javax.swing.JLabel();
        caltePriceTXTF = new javax.swing.JTextField();
        productNumberArrLBL = new javax.swing.JLabel();
        viewAllPrdcts = new javax.swing.JPanel();
        modifyProducts = new javax.swing.JPanel();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);

        welcomeLBL.setFont(new java.awt.Font("Perpetua Titling MT", 1, 24)); // NOI18N
        welcomeLBL.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        welcomeLBL.setText("Hi Stephanie!");

        separatorLine.setBackground(new java.awt.Color(0, 0, 0));
        separatorLine.setOpaque(true);

        homeDivivder.setDividerLocation(200);

        jScrollPane1.setVerticalScrollBarPolicy(javax.swing.ScrollPaneConstants.VERTICAL_SCROLLBAR_ALWAYS);

        recentHomeList.setCursor(new java.awt.Cursor(java.awt.Cursor.DEFAULT_CURSOR));
        jScrollPane1.setViewportView(recentHomeList);
        recentHomeList.getAccessibleContext().setAccessibleDescription("");

        javax.swing.GroupLayout openRecentsPNLLayout = new javax.swing.GroupLayout(openRecentsPNL);
        openRecentsPNL.setLayout(openRecentsPNLLayout);
        openRecentsPNLLayout.setHorizontalGroup(
            openRecentsPNLLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(openRecentsPNLLayout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jScrollPane1, javax.swing.GroupLayout.DEFAULT_SIZE, 504, Short.MAX_VALUE))
        );
        openRecentsPNLLayout.setVerticalGroup(
            openRecentsPNLLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(openRecentsPNLLayout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jScrollPane1, javax.swing.GroupLayout.DEFAULT_SIZE, 263, Short.MAX_VALUE)
                .addContainerGap())
        );

        homeDivivder.setRightComponent(openRecentsPNL);

        viewAllReportBTTNS.setText("View All Reports");
        viewAllReportBTTNS.setBorder(new javax.swing.border.SoftBevelBorder(javax.swing.border.BevelBorder.RAISED));

        printLstBTTN.setText("Print Last Report");
        printLstBTTN.setBorder(new javax.swing.border.SoftBevelBorder(javax.swing.border.BevelBorder.RAISED));

        homeSearchBTTN.setText("Search Products");
        homeSearchBTTN.setBorder(new javax.swing.border.SoftBevelBorder(javax.swing.border.BevelBorder.RAISED));

        Exit.setText("Exit");
        Exit.setBorder(new javax.swing.border.SoftBevelBorder(javax.swing.border.BevelBorder.RAISED));
        Exit.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                ExitActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout bttnsHomeLayout = new javax.swing.GroupLayout(bttnsHome);
        bttnsHome.setLayout(bttnsHomeLayout);
        bttnsHomeLayout.setHorizontalGroup(
            bttnsHomeLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(bttnsHomeLayout.createSequentialGroup()
                .addContainerGap()
                .addGroup(bttnsHomeLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(viewAllReportBTTNS, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addComponent(printLstBTTN, javax.swing.GroupLayout.DEFAULT_SIZE, 188, Short.MAX_VALUE)
                    .addComponent(homeSearchBTTN, javax.swing.GroupLayout.Alignment.TRAILING, javax.swing.GroupLayout.DEFAULT_SIZE, 188, Short.MAX_VALUE)
                    .addComponent(Exit, javax.swing.GroupLayout.DEFAULT_SIZE, 188, Short.MAX_VALUE))
                .addContainerGap())
        );
        bttnsHomeLayout.setVerticalGroup(
            bttnsHomeLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(bttnsHomeLayout.createSequentialGroup()
                .addGap(19, 19, 19)
                .addComponent(viewAllReportBTTNS, javax.swing.GroupLayout.PREFERRED_SIZE, 31, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(18, 18, 18)
                .addComponent(printLstBTTN, javax.swing.GroupLayout.PREFERRED_SIZE, 31, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(18, 18, 18)
                .addComponent(homeSearchBTTN, javax.swing.GroupLayout.PREFERRED_SIZE, 31, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(18, 18, 18)
                .addComponent(Exit, javax.swing.GroupLayout.PREFERRED_SIZE, 31, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap(78, Short.MAX_VALUE))
        );

        homeDivivder.setLeftComponent(bttnsHome);

        javax.swing.GroupLayout homePaneLayout = new javax.swing.GroupLayout(homePane);
        homePane.setLayout(homePaneLayout);
        homePaneLayout.setHorizontalGroup(
            homePaneLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(homePaneLayout.createSequentialGroup()
                .addContainerGap()
                .addComponent(homeDivivder, javax.swing.GroupLayout.DEFAULT_SIZE, 715, Short.MAX_VALUE)
                .addContainerGap())
        );
        homePaneLayout.setVerticalGroup(
            homePaneLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(homePaneLayout.createSequentialGroup()
                .addContainerGap()
                .addComponent(homeDivivder))
        );

        programHomePane.addTab("Home", homePane);

        productNameLBL.setText("Product Name:");

        productNaemList.setModel(new javax.swing.DefaultComboBoxModel<>(new String[] { "Item 1", "Item 2", "Item 3", "Item 4" }));

        priceTagLBL.setText("Price:");

        priceTXTF.setEditable(false);

        unitsLBL.setText("Units:");

        unitTXTF.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                unitTXTFActionPerformed(evt);
            }
        });

        EditPriceBTTN.setText("Edit Price");
        EditPriceBTTN.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                EditPriceBTTNActionPerformed(evt);
            }
        });

        nextProductBTTN.setText(">");

        prevProductBTTN.setText("<");

        calculateBTTN.setText("Generate Report");

        tax1LBL.setText("Tax 1:");

        tax2LBL.setText("Tax 2:");

        tax1TXTF.setEditable(false);
        tax1TXTF.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                tax1TXTFActionPerformed(evt);
            }
        });

        tax2TXTF.setEditable(false);

        caltePriceLBL.setText("Price");

        caltePriceTXTF.setEditable(false);

        productNumberArrLBL.setText("Product #");

        javax.swing.GroupLayout calculatePaneLayout = new javax.swing.GroupLayout(calculatePane);
        calculatePane.setLayout(calculatePaneLayout);
        calculatePaneLayout.setHorizontalGroup(
            calculatePaneLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, calculatePaneLayout.createSequentialGroup()
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addGroup(calculatePaneLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(productNameLBL, javax.swing.GroupLayout.PREFERRED_SIZE, 92, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addGroup(calculatePaneLayout.createSequentialGroup()
                        .addGroup(calculatePaneLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addGroup(calculatePaneLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                .addComponent(unitsLBL, javax.swing.GroupLayout.PREFERRED_SIZE, 98, javax.swing.GroupLayout.PREFERRED_SIZE)
                                .addComponent(priceTagLBL, javax.swing.GroupLayout.Alignment.TRAILING, javax.swing.GroupLayout.PREFERRED_SIZE, 98, javax.swing.GroupLayout.PREFERRED_SIZE))
                            .addComponent(tax1LBL, javax.swing.GroupLayout.PREFERRED_SIZE, 37, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(tax2LBL, javax.swing.GroupLayout.PREFERRED_SIZE, 37, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(caltePriceLBL, javax.swing.GroupLayout.PREFERRED_SIZE, 37, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addGap(18, 18, 18)
                        .addGroup(calculatePaneLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(productNaemList, javax.swing.GroupLayout.PREFERRED_SIZE, 284, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addGroup(calculatePaneLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING, false)
                                .addComponent(caltePriceTXTF, javax.swing.GroupLayout.Alignment.LEADING)
                                .addComponent(tax2TXTF, javax.swing.GroupLayout.Alignment.LEADING)
                                .addComponent(tax1TXTF, javax.swing.GroupLayout.Alignment.LEADING)
                                .addComponent(unitTXTF, javax.swing.GroupLayout.Alignment.LEADING, javax.swing.GroupLayout.DEFAULT_SIZE, 104, Short.MAX_VALUE))
                            .addGroup(calculatePaneLayout.createSequentialGroup()
                                .addComponent(priceTXTF, javax.swing.GroupLayout.PREFERRED_SIZE, 104, javax.swing.GroupLayout.PREFERRED_SIZE)
                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                                .addGroup(calculatePaneLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                    .addComponent(EditPriceBTTN, javax.swing.GroupLayout.PREFERRED_SIZE, 111, javax.swing.GroupLayout.PREFERRED_SIZE)
                                    .addGroup(calculatePaneLayout.createSequentialGroup()
                                        .addComponent(prevProductBTTN)
                                        .addGap(18, 18, 18)
                                        .addComponent(nextProductBTTN)
                                        .addGap(18, 18, 18)
                                        .addComponent(calculateBTTN)))))))
                .addGap(290, 290, 290))
            .addGroup(calculatePaneLayout.createSequentialGroup()
                .addGap(297, 297, 297)
                .addComponent(productNumberArrLBL, javax.swing.GroupLayout.PREFERRED_SIZE, 87, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
        );
        calculatePaneLayout.setVerticalGroup(
            calculatePaneLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(calculatePaneLayout.createSequentialGroup()
                .addContainerGap()
                .addGroup(calculatePaneLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(productNameLBL)
                    .addComponent(productNaemList, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addGroup(calculatePaneLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(calculatePaneLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                        .addComponent(EditPriceBTTN)
                        .addComponent(priceTXTF, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                    .addComponent(priceTagLBL, javax.swing.GroupLayout.Alignment.TRAILING, javax.swing.GroupLayout.PREFERRED_SIZE, 19, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(8, 8, 8)
                .addGroup(calculatePaneLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(unitTXTF, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(unitsLBL, javax.swing.GroupLayout.PREFERRED_SIZE, 25, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(calculatePaneLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(tax1LBL)
                    .addComponent(tax1TXTF, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(calculatePaneLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(tax2LBL)
                    .addComponent(tax2TXTF, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addGroup(calculatePaneLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(caltePriceLBL)
                    .addComponent(caltePriceTXTF, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 34, Short.MAX_VALUE)
                .addGroup(calculatePaneLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(prevProductBTTN)
                    .addComponent(nextProductBTTN)
                    .addComponent(calculateBTTN))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(productNumberArrLBL)
                .addGap(10, 10, 10))
        );

        programHomePane.addTab("Calculate Price", calculatePane);

        javax.swing.GroupLayout viewAllPrdctsLayout = new javax.swing.GroupLayout(viewAllPrdcts);
        viewAllPrdcts.setLayout(viewAllPrdctsLayout);
        viewAllPrdctsLayout.setHorizontalGroup(
            viewAllPrdctsLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 727, Short.MAX_VALUE)
        );
        viewAllPrdctsLayout.setVerticalGroup(
            viewAllPrdctsLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 281, Short.MAX_VALUE)
        );

        programHomePane.addTab("View All Products", viewAllPrdcts);

        javax.swing.GroupLayout modifyProductsLayout = new javax.swing.GroupLayout(modifyProducts);
        modifyProducts.setLayout(modifyProductsLayout);
        modifyProductsLayout.setHorizontalGroup(
            modifyProductsLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 727, Short.MAX_VALUE)
        );
        modifyProductsLayout.setVerticalGroup(
            modifyProductsLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 281, Short.MAX_VALUE)
        );

        programHomePane.addTab("Modify Products", modifyProducts);

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(welcomeLBL, javax.swing.GroupLayout.Alignment.TRAILING, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(programHomePane, javax.swing.GroupLayout.DEFAULT_SIZE, 727, Short.MAX_VALUE)
                    .addGroup(layout.createSequentialGroup()
                        .addComponent(separatorLine)
                        .addContainerGap())))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(welcomeLBL, javax.swing.GroupLayout.PREFERRED_SIZE, 54, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(separatorLine, javax.swing.GroupLayout.DEFAULT_SIZE, 2, Short.MAX_VALUE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(programHomePane, javax.swing.GroupLayout.PREFERRED_SIZE, 312, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap())
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void unitTXTFActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_unitTXTFActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_unitTXTFActionPerformed

    private void EditPriceBTTNActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_EditPriceBTTNActionPerformed
        boolean editPrice = false;
        priceTXTF.setEditable(true);
        editPrice = true;
        
        if(editPrice == true)
        {
            priceTXTF.setEditable(false);
            editPrice = false;
        }
    }//GEN-LAST:event_EditPriceBTTNActionPerformed

    private void tax1TXTFActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_tax1TXTFActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_tax1TXTFActionPerformed

    private void ExitActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_ExitActionPerformed
        System.exit(0);
    }//GEN-LAST:event_ExitActionPerformed

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
            java.util.logging.Logger.getLogger(mainMenu.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(mainMenu.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(mainMenu.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(mainMenu.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new mainMenu().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JToggleButton EditPriceBTTN;
    private javax.swing.JButton Exit;
    private javax.swing.JPanel bttnsHome;
    private javax.swing.JButton calculateBTTN;
    private javax.swing.JPanel calculatePane;
    private javax.swing.JLabel caltePriceLBL;
    private javax.swing.JTextField caltePriceTXTF;
    private javax.swing.JSplitPane homeDivivder;
    private javax.swing.JPanel homePane;
    private javax.swing.JButton homeSearchBTTN;
    private javax.swing.JScrollPane jScrollPane1;
    private javax.swing.JPanel modifyProducts;
    private javax.swing.JButton nextProductBTTN;
    private javax.swing.JPanel openRecentsPNL;
    private javax.swing.JButton prevProductBTTN;
    private javax.swing.JTextField priceTXTF;
    private javax.swing.JLabel priceTagLBL;
    private javax.swing.JButton printLstBTTN;
    private javax.swing.JComboBox<String> productNaemList;
    private javax.swing.JLabel productNameLBL;
    private javax.swing.JLabel productNumberArrLBL;
    private javax.swing.JTabbedPane programHomePane;
    private java.awt.List recentHomeList;
    private javax.swing.JSeparator separatorLine;
    private javax.swing.JLabel tax1LBL;
    private javax.swing.JTextField tax1TXTF;
    private javax.swing.JLabel tax2LBL;
    private javax.swing.JTextField tax2TXTF;
    private javax.swing.JTextField unitTXTF;
    private javax.swing.JLabel unitsLBL;
    private javax.swing.JPanel viewAllPrdcts;
    private javax.swing.JButton viewAllReportBTTNS;
    private javax.swing.JLabel welcomeLBL;
    // End of variables declaration//GEN-END:variables
}