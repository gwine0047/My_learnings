import ctypes

add_lib = ctypes.CDLL('./add.so')
result = add_lib.add(15, 23)

print("Result from C Function:",result)

add_lib.add(22, 44)
