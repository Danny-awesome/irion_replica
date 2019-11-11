<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

require_once 'config/dbConnect.php';

if (isset($_POST['verify_payment'])) {
    $downline = $_POST['downline'];
    $upline = $_SESSION['username'];
    $trans_date = $_POST['trans_date'];
    $trans_proof = $_POST['trans_proof'];
    $amount = $_POST['amount'];
    $msg = '';
    $due_msg = '';
    $currentDateTime = date('Y-m-d H:i:s');
    $due_date = date('Y-m-d H:i:s', strtotime($currentDateTime.'+2 days'));

    $confirm_trans = 1;
    if (empty($trans_proof)) {
        //
    } else {
        $query = "UPDATE transactions_info_all SET trans_confirmed='$confirm_trans' WHERE  user='$upline' AND  trans_date = '$trans_date' AND proof_destination='$trans_proof'";
        $update_trans_status = mysqli_query($conn, $query);
        if ($update_trans_status) {
            $query2 = "UPDATE transactions_info_all SET trans_confirmed='$confirm_trans' WHERE  made_trans_with ='$upline' AND trans_date = '$trans_date'  AND proof_destination='$trans_proof'";
            $update_trans_status = mysqli_query($conn, $query2);
            if ($update_trans_status) {
                $pre_checks = "SELECT * FROM users WHERE username=?";
                $stmt = $conn->prepare($pre_checks);
                $stmt->bind_param('s', $upline);
                $stmt->execute();
                $user_result = $stmt->get_result();
                $user_row = $user_result->fetch_assoc();
                $user_level = $user_row['user_level'];
                $user_gained = $user_row['total_gained'];
                $acct = $user_row['acct_type'];
                $new_level = 0;
                $total = $amount;

                if ($acct == 'common') {

                    if ($user_level == 1 and $user_gained == 0) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;
                        }

                    } else if ($user_level == 1 and $user_gained == 5000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;
                        }

                    } else if ($user_level == 1 and $user_gained == 10000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;
                        }

                    } else if ($user_level == 1 and $user_gained == 15000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;
                            $msg = "You've received all level 1 payment from your downlines.";
                            $due_payment = "UPDATE users SET payment_due_date='$due_date' WHERE username='$upline'";
                            $query_due = mysqli_query($conn, $due_payment);
                            if ($query_due) {
                                $due_msg = "COUNTDOWN STARTED : Pay your upline to upgrade to level 2 OR you'll be blocked in 48hrs :$due_date";
                            }
                        }
                    }
                    if ($user_level == 2 and $user_gained == 10000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;
                        }
                    } else if ($user_level == 2 and $user_gained == 20000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;
                        }
                    } else if ($user_level == 2 and $user_gained == 30000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;
                        }
                    } else if ($user_level == 2 and $user_gained == 40000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;

                            $msg = "You've received all level 2 payment from your downlines.";
                            $due_payment = "UPDATE users SET payment_due_date='$due_date' WHERE username='$upline'";
                            $query_due = mysqli_query($conn, $due_payment);
                            if ($query_due) {
                                $due_msg = "COUNTDOWN STARTED : Pay your upline to upgrade to level 3 OR you'll be blocked in 48hrs : $due_date";
                            }

                        }
                    }
                    if ($user_level == 3 and $user_gained == 35000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;
                        }
                    } else if ($user_level == 3 and $user_gained == 50000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;
                        }
                    } else if ($user_level == 3 and $user_gained == 65000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;
                        }
                    } else if ($user_level == 3 and $user_gained == 80000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;

                            $msg = "You've received all level 3 payment from your downlines.";
                            $due_payment = "UPDATE users SET payment_due_date='$due_date' WHERE username='$upline'";
                            $query_due = mysqli_query($conn, $due_payment);
                            if ($query_due) {
                                $due_msg = "COUNTDOWN STARTED : Pay your upline to upgrade to level 4 OR you'll be blocked in 48hrs : $due_date";
                            }

                        }
                    }
                    if ($user_level == 4 and $user_gained == 75000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;
                        }
                    } else if ($user_level == 4 and $user_gained == 95000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;
                        }
                    } else if ($user_level == 4 and $user_gained == 115000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;
                        }
                    } else if ($user_level == 4 and $user_gained == 135000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;

                            $msg = "You've received all level 4 payment from your downlines.";
                            $due_payment = "UPDATE users SET payment_due_date='$due_date' WHERE username='$upline'";
                            $query_due = mysqli_query($conn, $due_payment);
                            if ($query_due) {
                                $due_msg = "COUNTDOWN STARTED : Pay your upline to upgrade to level 5 OR you'll be blocked in 48hrs : $query_duedue_date";
                            }
                        }
                    }
                    if ($user_level == 5 and $user_gained == 125000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;
                        }
                    } else if ($user_level == 5 and $user_gained == 155000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;
                        }
                    } else if ($user_level == 5 and $user_gained == 185000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;
                        }
                    } else if ($user_level == 5 and $user_gained == 215000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;
                            $msg = "You've received all level 5 payment from your downlines.";
                            $due_payment = "UPDATE users SET payment_due_date='$due_date' WHERE username='$upline'";
                            $query_due = mysqli_query($conn, $due_payment);
                            if ($query_due) {
                                $due_msg = "COUNTDOWN STARTED : Pay your upline to upgrade to level 6 OR you'll be blocked in 48hrs : $due_date";
                            }
                        }
                    }
                    if ($user_level == 6 and $user_gained == 205000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;
                        }
                    } else if ($user_level == 6 and $user_gained == 245000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;
                        }
                    } else if ($user_level == 6 and $user_gained == 285000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;
                        }
                    } else if ($user_level == 6 and $user_gained == 325000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;

                            $msg = "You've received all level 6 payment from your downlines.";
                            $due_payment = "UPDATE users SET payment_due_date='$due_date' WHERE username='$upline'";
                            $query_due = mysqli_query($conn, $due_payment);
                            if ($query_due) {
                                $due_msg = "COUNTDOWN STARTED : Pay your upline to upgrade to level 7 OR you'll be blocked in 48hrs : $due_date";
                            }
                        }
                    }
                    if ($user_level == 7 and $user_gained == 315000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;
                        }
                    } else if ($user_level == 7 and $user_gained == 365000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;
                        }
                    } else if ($user_level == 7 and $user_gained == 415000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;
                        }
                    } else if ($user_level == 7 and $user_gained == 465000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;

                            $msg = "You've received all level 7 payment from your downlines.";
                            $due_payment = "UPDATE users SET payment_due_date='$due_date' WHERE username='$upline'";
                            $query_due = mysqli_query($conn, $due_payment);
                            if ($query_due) {
                                $due_msg = "COUNTDOWN STARTED : Pay your upline to upgrade to level 8 OR you'll be blocked in 48hrs : $due_date";
                            }
                        }
                    }
                    if ($user_level == 8 and $user_gained == 455000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;
                        }
                    } else if ($user_level == 8 and $user_gained == 515000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;
                        }
                    } else if ($user_level == 8 and $user_gained == 575000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;
                        }
                    } else if ($user_level == 8 and $user_gained == 635000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;

                            $msg = "You've received all level 8 payment from your downlines.";
                            $due_payment = "UPDATE users SET payment_due_date='$due_date' WHERE username='$upline'";
                            $query_due = mysqli_query($conn, $due_payment);
                            if ($query_due) {
                                $due_msg = "COUNTDOWN STARTED : Pay your upline to upgrade to level 9 OR you'll be blocked in 48hrs : $due_date";
                            }
                        }
                    }
                    if ($user_level == 9 and $user_gained == 625000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;
                        }
                    } else if ($user_level == 9 and $user_gained == 695000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;
                        }
                    } else if ($user_level == 9 and $user_gained == 765000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;
                        }
                    } else if ($user_level == 9 and $user_gained == 835000) {
                        $total = $amount;
                        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                        $update_gained_status = mysqli_query($conn, $update_amount);
                        if ($update_gained_status) {
                            $increase = "Total Gain increased by " . $total;

                            $PLATFORM = 'Irion';
                            $routeDownlines = "UPDATE irion_downlines SET user='$PLATFORM' WHERE user='$upline' ";
                            $route_ = mysqli_query($conn, $routeDownlines);
                            if($route_){
                                $routeUpline = "UPDATE irion_uplines SET upline ='$PLATFORM' WHERE upline='$upline' ";
                                $route_ = mysqli_query($conn, $routeUpline);
                                if($route_){
                                    echo 'success';
                                }
                            }

                            $msg = "You've received all level 9 payment from your downlines. Restart Irion Cycle By paying Reset Fee to new upline.";
                        }
                    }
                } else {
                    $total = $amount;
                    $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline'";
                    $update_gained_status = mysqli_query($conn, $update_amount);
                    if ($update_gained_status) {
                        $increase = "Total Gain increased by " . $total;
                    }
                }

                $pre_checks = "SELECT * FROM users WHERE username=?";
                $stmt = $conn->prepare($pre_checks);
                $stmt->bind_param('s', $downline);
                $stmt->execute();
                $user_result = $stmt->get_result();
                $user_row = $user_result->fetch_assoc();
                $user_level['user_level'];
                $user_gained['total_gained'];
                $new_level = 0;
                $total = $amount;

                if ($user_level == 0 and $total == 5000) {
                    $new_level = 1;
                    $update_amount = "UPDATE users SET user_level='$new_level' WHERE username='$downline'";
                    $update_gained_status = mysqli_query($conn, $update_amount);
                    if ($update_gained_status) {
                        $plusup = "You are now level" . $new_level;
                    }
                } else if ($user_level == 1 and $total == 10000) {
                    $new_level = 2;
                    $update_amount = "UPDATE users SET user_level='$new_level', total_gained=total_gained-$total WHERE username='$downline'";
                    if ($update_gained_status) {
                        $plusup = "You are now level" . $new_level;
                    }
                } else if ($user_level == 2 and $total == 15000) {
                    $new_level = 3;
                    $update_amount = "UPDATE users SET user_level='$new_level', total_gained=total_gained-$total WHERE username='$downline'";
                    if ($update_gained_status) {
                        $plusup = "You are now level" . $new_level;
                    }
                } else if ($user_level == 3 and $total == 20000) {
                    $new_level = 4;
                    $update_amount = "UPDATE users SET user_level='$new_level', total_gained=total_gained-$total WHERE username='$downline'";
                    if ($update_gained_status) {
                        $plusup = "You are now level" . $new_level;
                    }
                } else if ($user_level == 4 and $total == 30000) {
                    $new_level = 5;
                    $update_amount = "UPDATE users SET user_level='$new_level', total_gained=total_gained-$total WHERE username='$downline'";
                    if ($update_gained_status) {
                        $plusup = "You are now level" . $new_level;
                    }
                } else if ($user_level == 5 and $total == 40000) {
                    $new_level = 6;
                    $update_amount = "UPDATE users SET user_level='$new_level', total_gained=total_gained-$total WHERE username='$downline'";
                    if ($update_gained_status) {
                        $plusup = "You are now level" . $new_level;
                    }
                } else if ($user_level == 6 and $total == 50000) {
                    $new_level = 7;
                    $update_amount = "UPDATE users SET user_level='$new_level', total_gained=total_gained-$total WHERE username='$downline'";
                    if ($update_gained_status) {
                        $plusup = "You are now level" . $new_level;
                    }
                } else if ($user_level == 7 and $total == 60000) {
                    $new_level = 8;
                    $update_amount = "UPDATE users SET user_level='$new_level', total_gained=total_gained-$total WHERE username='$downline'";
                    if ($update_update_gained_statustrans_status) {
                        $plusup = "You are now level" . $new_level;
                    }
                } else if ($user_level == 8 and $total == 70000) {
                    $new_level = 9;
                    $update_amount = "UPDATE users SET user_level='$new_level', total_gained=total_gained-$total WHERE username='$downline'";
                    if ($update_gained_status) {
                        $plusup = "You are now level" . $new_level;
                    }
                } else if ($user_level == 9 and $total == 70000) {
                    
                }

                $updateStatus = 'Payment verified';
                $alert_class = "alert-success";
            } else {
                $updateStatus = 'Payment verification failed';
                $alert_class = "alert-danger";
            }

        }
    }

}
