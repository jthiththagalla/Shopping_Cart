<!DOCTYPE html>
<html>
    <head>
        <title>Shopping Cart</title>
        <link rel="stylesheet" href="../css/stylesheat.css" type="text/css"/>
        <script src="../javascript/quentitymaintain.js"></script>
    </head>
    <body>   
        <div id="Header">
            <h1>Shopping Cart</h1>
        </div>
        <div id="content">
            <div class="block">
                <h2>Samsung Galaxy s4</h2>
                <hr/>

                <div class="imageDiv">
                    <img alt="phone" src="../images/phone.jpg"/>
                </div>

                <div class="blockContentDiv">
                    <table>
                        <tr>
                            <td>
                                Price    :
                            </td> 
                            <td>
                                Rs. 56,670/=
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Quantity :
                            </td> 
                            <td>
                                <div class="qtyButton" onclick="incrementValue('quentity1')">+</div>
                                <span id="quentity1" class="qty">0</span>
                                <div class="qtyButton" onclick="decrementValue('quentity1')">-</div>
                            </td>

                        </tr>
                    </table>
                </div>


            </div>
            <div class="block" id="blockB">
                <h2>Samsung Galaxy s5</h2>
                <hr/>

                <div class="imageDiv">
                    <img alt="phone" src="../images/phone.jpg"/>
                </div>
                <div class="blockContentDiv">
                    <table>
                        <tr>
                            <td>
                                Price    :
                            </td> 
                            <td>
                                Rs. 66,000/=
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Quantity :
                            </td> 
                            <td>
                                <div class="qtyButton" onclick="incrementValue('quentity2')">+</div>
                                <span id="quentity2" class="qty">0</span>
                                <div class="qtyButton" onclick="decrementValue('quentity2')">-</div>
                            </td>

                        </tr>
                    </table>
                </div>


            </div>
            <div class="block">
                <h2>Samsung Galaxy s6</h2>
                <hr/>

                <div class="imageDiv">
                    <img alt="phone" src="../images/phone.jpg"/>
                </div>
                <div class="blockContentDiv">
                    <table>
                        <tr>
                            <td>
                                Price    :
                            </td> 
                            <td>
                                Rs. 80,990/=
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Quantity :
                            </td> 
                            <td>
                                <div class="qtyButton" onclick="incrementValue('quentity3')">+</div>
                                <span id="quentity3" class="qty">0</span>
                                <div class="qtyButton" onclick="decrementValue('quentity3')">-</div>
                            </td>

                        </tr>
                    </table>
                </div>


            </div>
        </div>
    </body>
</html>
