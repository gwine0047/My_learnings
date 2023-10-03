import pickle

# name of file where to store data
shoplistfile = 'shoplist.data'

shoplist = ['House', 'business', 'organization']
f = open(shoplistfile, 'wb')

#dump the object to the file
pickle.dump(shoplist, f)
f.close()

f = open(shoplistfile, 'rb')
#load the object from the file
storedlist = pickle.load(f)

print(storedlist)
f.close()

