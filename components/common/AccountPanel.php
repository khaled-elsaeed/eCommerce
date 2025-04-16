<?php
function renderAccountPanel($activePanel = 1) {
?>
    <div class="checkout-wrapper">
        <div id="faq" class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title"><span>1</span> <a data-toggle="collapse" data-parent="#faq" href="#my-account-1" <?php echo ($activePanel == 1) ? 'aria-expanded="true"' : ''; ?>>Edit your account information </a></h5>
                </div>
                <div id="my-account-1" class="panel-collapse collapse <?php echo ($activePanel == 1) ? 'show' : ''; ?>">
                    <div class="panel-body">
                        <div class="billing-information-wrapper">
                            <div class="account-info-wrapper">
                                <h4>My Account Information</h4>
                                <h5>Your Personal Details</h5>
                            </div>
                            <form action="backend/update_account.php" method="post">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info">
                                            <label>First Name</label>
                                            <input type="text" name="first_name" value="<?php echo isset($_SESSION['first_name']) ? $_SESSION['first_name'] : ''; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info">
                                            <label>Last Name</label>
                                            <input type="text" name="last_name" value="<?php echo isset($_SESSION['last_name']) ? $_SESSION['last_name'] : ''; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info">
                                            <label>Email Address</label>
                                            <input type="email" name="email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info">
                                            <label>Telephone</label>
                                            <input type="text" name="telephone" value="<?php echo isset($_SESSION['telephone']) ? $_SESSION['telephone'] : ''; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info">
                                            <label>Fax</label>
                                            <input type="text" name="fax" value="<?php echo isset($_SESSION['fax']) ? $_SESSION['fax'] : ''; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="billing-back-btn">
                                    <div class="billing-back">
                                        <a href="#"><i class="ion-arrow-up-c"></i> back</a>
                                    </div>
                                    <div class="billing-btn">
                                        <button type="submit" name="update_account">Update Information</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title"><span>2</span> <a data-toggle="collapse" data-parent="#faq" href="#my-account-2" <?php echo ($activePanel == 2) ? 'aria-expanded="true"' : ''; ?>>Change your password </a></h5>
                </div>
                <div id="my-account-2" class="panel-collapse collapse <?php echo ($activePanel == 2) ? 'show' : ''; ?>">
                    <div class="panel-body">
                        <div class="billing-information-wrapper">
                            <div class="account-info-wrapper">
                                <h4>Change Password</h4>
                                <h5>Your Password</h5>
                            </div>
                            <form action="backend/update_password.php" method="post">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info">
                                            <label>Current Password</label>
                                            <input type="password" name="current_password">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info">
                                            <label>New Password</label>
                                            <input type="password" name="new_password">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info">
                                            <label>Password Confirm</label>
                                            <input type="password" name="confirm_password">
                                        </div>
                                    </div>
                                </div>
                                <div class="billing-back-btn">
                                    <div class="billing-back">
                                        <a href="#"><i class="ion-arrow-up-c"></i> back</a>
                                    </div>
                                    <div class="billing-btn">
                                        <button type="submit" name="update_password">Change Password</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title"><span>3</span> <a data-toggle="collapse" data-parent="#faq" href="#my-account-3" <?php echo ($activePanel == 3) ? 'aria-expanded="true"' : ''; ?>>Modify your address book entries </a></h5>
                </div>
                <div id="my-account-3" class="panel-collapse collapse <?php echo ($activePanel == 3) ? 'show' : ''; ?>">
                    <div class="panel-body">
                        <div class="billing-information-wrapper">
                            <div class="account-info-wrapper">
                                <h4>Address Book Entries</h4>
                            </div>
                            <div class="entries-wrapper">
                                <?php 
                                $addresses = []; 
                                if (!empty($addresses)): 
                                    foreach ($addresses as $address): 
                                ?>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
                                        <div class="entries-info text-center">
                                            <p><?php echo $address['name']; ?></p>
                                            <p><?php echo $address['company']; ?></p>
                                            <p><?php echo $address['address_1']; ?></p>
                                            <p><?php echo $address['address_2']; ?></p>
                                            <p><?php echo $address['city']; ?></p>
                                            <p><?php echo $address['country']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
                                        <div class="entries-edit-delete text-center">
                                            <a class="edit" href="edit-address.php?id=<?php echo $address['id']; ?>">Edit</a>
                                            <a href="backend/delete_address.php?id=<?php echo $address['id']; ?>">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                    endforeach; 
                                else: 
                                ?>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <p>No addresses have been added yet</p>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="billing-back-btn">
                                <div class="billing-back">
                                    <a href="#"><i class="ion-arrow-up-c"></i> back</a>
                                </div>
                                <div class="billing-btn">
                                    <a href="add-address.php">Add New Address</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title"><span>4</span> <a href="wishlist.php">Modify your wish list</a></h5>
                </div>
            </div>
        </div>
    </div>
<?php
}
?> 