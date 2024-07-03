#!/bin/bash

GREEN='\033[0;32m'
NC='\033[0m' 

echo "========================"
echo "Script for exam by Yashin V.S."
echo "========================"
echo "[1] Show users and OS"
echo "[2] Show all files in directory"
echo "[3] Create file"
echo "[4] Ping something"
echo "========================"
echo "[0] Exit"

while true; do
    read -p "Enter your choice: " choice
    case $choice in
        1)
            echo "========================"
            echo -e "${GREEN}$(whoami)${NC}"
            echo -e "${GREEN}$(lsb_release -a)${NC}"
            echo "========================"
            ;;
        2)
            echo "========================"
            echo -e "${GREEN}$(ls -la ~)${NC}"
            echo "========================"
            ;;
        3)
            echo "========================"
            read -p "Enter the directory where you want to create the file: " directory
            read -p "Enter the name of the file to create: " filename
            read -p "Enter the permissions for the file (e.g., 755): " permissions
            touch "$directory/$filename"
            chmod "$permissions" "$directory/$filename"
            echo -e "${GREEN}File $directory/$filename created with permissions $permissions${NC}"
            echo "========================"
            ;;
        4)
            echo "========================"
            read -p "Enter the hostname or IP address to ping: " host
            echo -e "${GREEN}$(ping -c 3 "$host")${NC}"
            echo "========================"
            ;;
        0)
            echo "Exiting..."
            break
            ;;
        *)
            echo "Invalid choice, please try again."
            ;;
    esac
done
