from cx_Freeze import setup, Executable
setup(
    name = "Calculator",
    version = "0.1",
    description = "my first calculator",
    executables = [Executable("calculator.py")]
)