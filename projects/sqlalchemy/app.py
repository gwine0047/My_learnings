#!/usr/bin/python3

from sqlalchemy import create_engine
from sqlalchemy.engine import Engine
# """
#  It's responsible for managing the database connection
#  and handling the interaction between your application
#  and the database.
#  """

# creating a database URL that connects to mysql server
username = 'gwine0047'
password = 'basedata'
host = 'localhost'
port = 3306

server_url = f'mysql+pymysql://{username}:{password}@{host}:{port}'

engine = create_engine(server_url)

db_name = "School_Of_Discipleship"

# connect to the server and create the new database
with engine.connect() as connection:
    connection.execute(f"CREATE DATABASE {db_name}")
print(f"Database '{db_name}' created successfully.")