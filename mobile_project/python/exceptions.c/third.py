import sys
import time

f = None;

try:
    f = open("psalm.txt")
    while (1):
        line = f.readline()
        if len(line) == 0:
            break
        print(line, end='')
        
        sys.stdout.flush()
        print("Press ctrl c now")
        time.sleep(2)

except IOError:
    print("Could not find the filepsalm.txt")

except KeyboardInterrupt:
    print("Hey! You interrupted me!")
finally:
    if f:
        f.close()
        print("Done here, cleaning up, closing file....")
