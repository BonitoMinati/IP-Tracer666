import os
import time
import sys

def MSG():
	print(Y)
	YTC = input("Have U Join Us ? (Y/N): ")
	if YTC == 'Y' or YTC == 'y':
		print(G)
		print("Thank You For Joining Us...\n")
		time.sleep(4)
		print("Initializing tool...")
		time.sleep(4)		
		print(W + "\n\n")
		main()
	elif YTC == 'N' or YTC == 'n':
		print("")
		os.system("xdg-open https://bonitominati.in.net/")
		time.sleep(8)
		os.system("xdg-open https://github.com/BonitoMinati")
		time.sleep(3)
		print(W + "\n\n")
		main()
MSG()

def MSG():
	print(Y)
	YTC = input("Wanna Join Our Telegram and Whatsapp Group ? (Y/N): ")
	if YTC == 'N' or YTC == 'N':
		print(G)
		print("OH you dont want? Okay...\n")
		time.sleep(4)
		print("Initializing tool...")
		time.sleep(4)		
		print(W + "\n\n")
		main()
	elif YTC == 'Y' or YTC == 'y':
		print("")
		os.system("xdg-open https://chat.whatsapp.com/JMYoz1nn90814vHL9AfwVX")
		time.sleep(8)
		os.system("xdg-open https://t.me/BonitoMinatiZero")
		time.sleep(3)
		print(W + "\n\n")
		main()
MSG()
