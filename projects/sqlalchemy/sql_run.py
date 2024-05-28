#!/usr/bin/python3

import os
import subprocess
import pymysql
from sqlalchemy import create_engine

# execute system commands
Class MySqlSetup:
    """
    commands to install and run mysql
    """
    def __init__(self, root_password='', new_username='New_User', new_password='pass_word', new_database='new_database'):
        self.root_password=root_password
        self.new_username=new_username
        self.new_password=new_password
        self.new_database=new_database

    def run_command(self, command):
        try:
            result = subprocess.run(command, check=True, shell=True, text=True, stdout=subprocess.PIPE, sterr=subprocess.PIPE)
            print(result.stdout)
            return result.stdout
        except subprocess.CalledProcessError as e:
            print(f"Error: {e.stderr}")
            return None
    
    def install_mysql(self):
        """
        This method will install mysql on a linux/unix server
        """
        print("Installing MySQL Server...")
        self.run_command("sudo apt update")
        self.run_command("sudo apt install -y mysql-server")

    def start_mysql_service(self):
        """
        This will start MySQL
        """
        print("Starting MySQL Service...")
        self.run_command("sudo service mysql start")

    def secure_mysql_installation(self):
        """
        This will help secure MySQL
        """
        print("Securing MySQL installation...")
        secure_commands = f'""'
        sudo mysql_secure_installation <<EOF

        y
        n
        y
        y
        y
        EOF
        '""'
        self.run_command(secure_commands)
